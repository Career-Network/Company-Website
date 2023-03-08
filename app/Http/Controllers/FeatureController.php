<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Feature;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use League\CommonMark\Util\UrlEncoder;
use Exception;

use function PHPUnit\Framework\isEmpty;
use function PHPUnit\Framework\isNull;

class FeatureController extends Controller
{
    public function blog()
    {
        return view('blog');
    }
    public function detailBlog()
    {
        return view('detail-bigBlog');
    }
    public function writer()
    {
        return view('login-writer');
    }
    public function dashboard()
    {
        $blogs = collect(Blog::where('user_id', '=', 1)->get());
        return view('dashboard-writer', [
            'blogs' => $blogs,
        ]);
    }
    public function create()
    {
        return view('create-blog-writer');
    }
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
            toast('Your blog does not uploaded!','error');
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
                'user_id' => 1,
                'title' => $request->title,
                'author' => $request->author,
                'update_date' => $request->update_date,
                'body' => $request->body,
                'image' => $image,
                'hastags' => $request->hastags,
            ]);
        } catch (Exception $e) {
            toast('There is Internal Server Error!','error');
            return redirect()
                ->route('blog-writer')
                ->with(['error' => 'Blog gagal diupload!']);
        }

        toast('You\'ve Successfully Uploaded Your Blog!','success');
        return redirect()
            ->route('blog-writer')
            ->with(['error' => 'Blog gagal diupload!']);
    }
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
            toast('There is Internal Server Error!','error');
            return redirect()
                ->route('blog-writer')
                ->with(['error' => 'Blog gagal dihapus!']);
        }

        toast('You\'ve Successfully Deleted Your Blog!','success');
        return redirect()
            ->route('blog-writer')
            ->with(['success' => 'Blog successfully deleted!']);
    }
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
            toast('Your blog does not uploaded!','error');
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
                'user_id' => 1,
                'title' => $request->title,
                'author' => $request->author,
                'update_date' => $request->update_date,
                'body' => $request->body,
                'image' => $image,
                'hastags' => $request->hastags,
            ]);
        } catch (Exception $e) {
            toast('There is Internal Server Error!','error');
            return redirect()
                ->route('blog-writer')
                ->with(['error' => 'Blog berhasil diupload!']);
        }

        toast('You\'ve Successfully Updated Your Blog!','success');
        return redirect()
            ->route('blog-writer')
            ->with(['success' => 'Blog berhasil diupdate!']);
    }
    public function uploadImage()
    {
        $imgpath = request()
            ->file('file')
            ->store('uploads', 'public');
        return response()->json(['location' => url("../../storage/$imgpath")]);
    }
    public function uploaded()
    {
        $blogs = collect(Blog::where('user_id', '=', 1)->get());
        return view('uploaded-writer', [
            'blogs' => $blogs,
        ]);
    }
    public function schedule()
    {
        return view('schedule-writer');
    }
    public function detail($id)
    {
        $blog = Blog::find($id);
        return view('detail-blog', [
            'blog' => $blog,
        ]);
    }
    public function detailMentor()
    {
        return view('detail-mentor');
    }
    public function testimoni()
    {
        return view('testimoni-writer');
    }
    public function tnc()
    {
        return view('TnC');
    }
    public function privacy()
    {
        return view('privacy_policy');
    }
    public function classSchedule() {
        return view('classSchedule-writer');
    }
    public function createClassSchedule() {
        return view('create-classSchedule-writer');
    }
}