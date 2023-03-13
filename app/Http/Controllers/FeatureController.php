<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Schedule;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class FeatureController extends Controller
{
    private $blogs;

    /*
    |--------------------------------------------------------------------------
    | Blog
    |--------------------------------------------------------------------------
    |
    | When user want to use the system, they must log in firstly to get
    | the features they want to use and do, via auth function it will authen-
    | ticate their input in login form and determine which role they have
    | and what features that they can use
    |
    */
    public function blog()
    {
        return view('blog');
    }

    public function detailBlog()
    {
        return view('detail-bigBlog');
    }

    /*
    |--------------------------------------------------------------------------
    | Login
    |--------------------------------------------------------------------------
    |
    | When user want to use the system, they must log in firstly to get
    | the features they want to use and do, via auth function it will authen-
    | ticate their input in login form and determine which role they have
    | and what features that they can use
    |
    */
    public function writer()
    {
        return view('login-writer');
    }

    /*
    |--------------------------------------------------------------------------
    | Auth
    |--------------------------------------------------------------------------
    |
    | When user want to use the system, they must log in firstly to get
    | the features they want to use and do, via auth function it will authen-
    | ticate their input in login form and determine which role they have
    | and what features that they can use
    |
    */
    public function auth(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $role = Auth::user()->role_name;
            Alert::success(
                'You\'ve Successfully Logged In!',
                'You are an ' . strtolower($role) . '. Enjoy Your Dashboard'
            );
            return redirect()
                ->route('dashboard-writer')
                ->with([
                    'success' => 'You are logging in dashboard successfully!',
                ]);
        } else {
            return back()
                ->withErrors([
                    'username' =>
                        'Identitas tersebut tidak cocok dengan data kami.',
                ])
                ->onlyInput('username');
        }
    }

    /*
    |--------------------------------------------------------------------------
    | Logout
    |--------------------------------------------------------------------------
    |
    | When user want to out from the system, they must to logout 
    | they can click the button logout and will be proceed in this function
    |
    */
    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('blog/login');
    }

    /*
    |--------------------------------------------------------------------------
    | Dashboard
    |--------------------------------------------------------------------------
    |
    | When utilizing the APC, database, memcached, Redis, or DynamoDB cache
    | stores there might be other applications using the same cache. For
    | that reason, you may prefix every cache key to avoid collisions.
    |
    */
    public function dashboard()
    {
        $schedules = collect(
            Schedule::where('status', '=', 'active')->get('blog_id')
        );
        $nearestTime = Schedule::where('blogs.user_id', '=', Auth::user()->id)
            ->where('status', '=', 'active')
            ->join('blogs', 'schedules.blog_id', '=', 'blogs.id')
            ->min('set_date');
        $nearestBlog = Schedule::where('set_date', '=', $nearestTime)->first();
        $nearests = null;
        $nearestTime = 0;
        $nearestBlogInDashboard = null;

        if ($nearestBlog != null) {
            $nearestBlogInDashboard = Blog::where(
                'user_id',
                '=',
                Auth::user()->id
            )
                ->where('id', '=', $nearestBlog->blog_id)
                ->orderBy('update_date', 'ASC')
                ->first();

            $nearestTime = $nearestBlog->set_date;
        }

        $blogs = [];

        if ($nearestBlogInDashboard !== null) {
            $nearests = Blog::where('user_id', '=', Auth::user()->id)
                ->where('id', '=', $nearestBlog->blog_id)
                ->orderBy('update_date', 'ASC')
                ->first();
        }

        if (Auth::user()->role_name === 'Writer') {
            $blogs[] = Blog::where('user_id', '=', Auth::user()->id)
                ->whereNotIn('id', $schedules)
                ->orderBy('update_date', 'DESC')
                ->get();
            $this->blogs = collect($blogs[0]);
        } else {
            $blogs[] = collect(Blog::whereNotIn('id', $schedules)->get());
            $this->blogs = $blogs[0];
        }
        return view('dashboard-writer', [
            'blogs' => $this->blogs,
            'nearest' => $nearests,
            'time' => $nearestTime,
        ]);
    }

    /*
    |--------------------------------------------------------------------------
    | Writer Features
    |--------------------------------------------------------------------------
    |
    | When utilizing the APC, database, memcached, Redis, or DynamoDB cache
    | stores there might be other applications using the same cache. For
    | that reason, you may prefix every cache key to avoid collisions.
    |
    */
    public function create()
    {
        return view('create-blog-writer');
    }

    public function uploaded()
    {
        $schedules = collect(
            Schedule::where('status', '=', 'active')->get('blog_id')
        );
        $blogs = [];
        if (Auth::user()->role_name === 'Writer') {
            $blogs[] = Blog::where('user_id', '=', Auth::user()->id)
                ->whereNotIn('id', $schedules)
                ->orderBy('update_date', 'DESC')
                ->get();
            $this->blogs = collect($blogs[0]);
        } else {
            $blogs[] = collect(Blog::whereNotIn('id', $schedules)->get());
            $this->blogs = $blogs[0];
        }
        return view('uploaded-writer', [
            'blogs' => $this->blogs,
        ]);
    }

    public function schedule()
    {
        $schedules = collect(
            Schedule::where('status', '=', 'active')->get('blog_id')
        );
        $blogs = collect(
            Blog::where('user_id', '=', Auth::user()->id)
                ->whereIn('id', $schedules)
                ->get()
        );
        return view('schedule-writer', [
            'blogs' => $blogs,
        ]);
    }

    public function scheduleBlog(Request $request)
    {
        $setDate = $request->set_date . ' ' . $request->set_time;
        $image = $request->file('image')->store('thumbnails');
        $blogID = mt_rand(10000, 99999);

        try {
            $data = Blog::create([
                'id' => $blogID,
                'user_id' => Auth::user()->id,
                'title' => $request->titleSchedule,
                'author' => $request->authorSchedule,
                'update_date' => $request->updateDateSchedule,
                'body' => $request->bodySchedule,
                'image' => $image,
                'hastags' => $request->hastagsSchedule,
            ]);

            Schedule::create([
                'blog_id' => $blogID,
                'set_date' => $setDate,
                'status' => 'active',
            ]);
        } catch (Exception $e) {
            dd($e);
        }

        toast('Successfully to schedule your blog!', 'success');
        return redirect()
            ->route('schedule-writer')
            ->with(['success' => 'Blog berhasil diupdate!']);
    }

    public function detail($id)
    {
        $blog = Blog::find($id);
        return view('detail-blog', [
            'blog' => $blog,
        ]);
    }

    /*
    |--------------------------------------------------------------------------
    | Store Blog
    |--------------------------------------------------------------------------
    |
    | When user want to out from the system, they must to logout 
    | they can click the button logout and will be proceed in this function
    |
    */
    public function storeBlog(Request $request): RedirectResponse
    {
        // validate form
        $validation = Validator::make($request->all(), [
            'title' => 'required|max:100',
            'author' => 'required',
            'body' => 'required',
            'update_date' => 'required',
            'image' => 'required|image|mimes:webp,png,jpg|max:5000',
            'hastags' => 'required',
        ]);

        if ($validation->fails()) {
            toast('Your blog does not uploaded!', 'error');
            return redirect()
                ->back()
                ->withInput()
                ->withErrors($validation);
        }

        // upload image
        $image = $request->file('image')->store('thumbnails');

        // store blog
        try {
            Blog::create([
                'user_id' => Auth::user()->id,
                'title' => $request->title,
                'author' => $request->author,
                'update_date' => $request->update_date,
                'body' => $request->body,
                'image' => $image,
                'hastags' => $request->hastags,
            ]);
        } catch (Exception $e) {
            toast('There is Internal Server Error!', 'error');
            return redirect()
                ->route('blog-writer')
                ->with(['error' => 'Blog gagal diupload!']);
        }

        toast('You\'ve Successfully Uploaded Your Blog!', 'success');
        return redirect()
            ->route('blog-writer')
            ->with(['success' => 'Blog successfully uploaded!']);
    }

    /*
    |--------------------------------------------------------------------------
    | Update Blog
    |--------------------------------------------------------------------------
    |
    | When user want to out from the system, they must to logout 
    | they can click the button logout and will be proceed in this function
    |
    */
    public function updateBlog(Request $request)
    {
        // get id
        $id = $request->id;

        // validate form
        $validation = Validator::make($request->all(), [
            'title' => 'required|max:100',
            'author' => 'required',
            'body' => 'required',
            'update_date' => 'required',
            'image' => 'image|mimes:webp,png,jpg|max:5000',
            'hastags' => 'required',
        ]);

        if ($validation->fails()) {
            toast('Your blog does not uploaded!', 'error');
            return redirect()
                ->back()
                ->withInput()
                ->withErrors($validation);
        }

        $image = '';

        if ($request->file('image')) {
            // upload image
            $image = $request
                ->file('image')
                ->storeAs(
                    'thumbnails',
                    uuid_create() .
                        '.' .
                        $request->file('image')->getClientOriginalExtension()
                );
            Storage::delete($request->imageOld);
        } else {
            $image = $request->imageOld;
        }

        // get blog
        try {
            Blog::where('id', '=', (int) $id)->update([
                'user_id' => Auth::user()->id,
                'title' => $request->title,
                'author' => $request->author,
                'update_date' => $request->update_date,
                'body' => $request->body,
                'image' => $image,
                'hastags' => $request->hastags,
            ]);
        } catch (Exception $e) {
            toast('There is Internal Server Error!', 'error');
            return redirect()
                ->route('blog-writer')
                ->with(['error' => 'Blog berhasil diupload!']);
        }

        toast('You\'ve Successfully Updated Your Blog!', 'success');
        return redirect()
            ->route('blog-writer')
            ->with(['success' => 'Blog berhasil diupdate!']);
    }

    /*
    |--------------------------------------------------------------------------
    | Destroy Blog
    |--------------------------------------------------------------------------
    |
    | When user want to out from the system, they must to logout 
    | they can click the button logout and will be proceed in this function
    |
    */
    public function destroyBlog(Request $request)
    {
        // get id
        $id = $request->id;

        // get blog
        $blog = Blog::find($id);

        try {
            Storage::delete($blog->image);
            $blog->delete();
        } catch (Exception $e) {
            toast('There is Internal Server Error!', 'error');
            return redirect()
                ->route('blog-writer')
                ->with(['error' => 'Blog gagal dihapus!']);
        }

        toast('You\'ve Successfully Deleted Your Blog!', 'success');
        return redirect()
            ->route('blog-writer')
            ->with(['success' => 'Blog successfully deleted!']);
    }

    /*
    |--------------------------------------------------------------------------
    | Upload Image Body
    |--------------------------------------------------------------------------
    |
    | When user want to out from the system, they must to logout 
    | they can click the button logout and will be proceed in this function
    |
    */
    public function uploadImage()
    {
        $imgpath = request()
            ->file('file')
            ->store('uploads', 'public');
        return response()->json(['location' => url("../../storage/$imgpath")]);
    }

    /*
    |--------------------------------------------------------------------------
    | Admin Features
    |--------------------------------------------------------------------------
    |
    | When utilizing the APC, database, memcached, Redis, or DynamoDB cache
    | stores there might be other applications using the same cache. For
    | that reason, you may prefix every cache key to avoid collisions.
    |
    */

    public function detailMentor()
    {
        return view('detail-mentor');
    }

    public function classSchedule()
    {
        return view('classSchedule-writer');
    }

    public function createClassSchedule()
    {
        return view('create-classSchedule-writer');
    }

    /*
    |--------------------------------------------------------------------------
    | Others
    |--------------------------------------------------------------------------
    |
    | When utilizing the APC, database, memcached, Redis, or DynamoDB cache
    | stores there might be other applications using the same cache. For
    | that reason, you may prefix every cache key to avoid collisions.
    |
    */
    public function tnc()
    {
        return view('TnC');
    }

    public function privacy()
    {
        return view('privacy_policy');
    }
}
