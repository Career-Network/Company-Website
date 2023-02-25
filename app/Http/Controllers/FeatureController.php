<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Feature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
    public function storeBlog(Request $request)
    {
        // validate form
        $this->validate($request, [
            'title' => 'required|max:100',
            'author' => 'required',
            'body' => 'required',
            'update_date' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5000',
            'hastags' => 'required',
        ]);

        // upload image
        $image = $request->file('image')->store('thumbnails');

        // store blog
        $blog = Blog::create([
            'user_id' => 1,
            'title' => $request->title,
            'author' => $request->author,
            'update_date' => $request->update_date,
            'body' => $request->body,
            'image' => $image,
            'hastags' => $request->hastags,
        ]);

        return redirect()
            ->route('dashboard-writer')
            ->with(['success' => 'Blog berhasil diupload!']);
    }
    public function destroyBlog(Request $request)
    {
        // get id
        $id = $request->id;

        // get blog
        $blog = Blog::find($id);
        Storage::delete($blog->image);
        $blog->delete();

        return redirect()
            ->route('dashboard-writer')
            ->with(['success' => 'Blog berhasil dihapus!']);
    }
    public function updateBlog(Request $request)
    {
        // get id
        $id = $request->id;

        // dd($request);

        // validate form
        $this->validate($request, [
            'title' => 'required|max:100',
            'author' => 'required',
            'body' => 'required',
            'update_date' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5000',
            'hastags' => 'required',
        ]);

        // upload image
        $image = $request->file('image')->store('thumbnails');

        // get blog
        $blog = Blog::where('id', '=', (int) $id)->update([
            'user_id' => 1,
            'title' => $request->title,
            'author' => $request->author,
            'update_date' => $request->update_date,
            'body' => $request->body,
            'image' => $image,
            'hastags' => $request->hastags,
        ]);

        return redirect()
            ->route('blog-writer')
            ->with(['success' => 'Blog berhasil diupdate!']);
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
    public function tnc()
    {
        return view('TnC');
    }
    public function privacy()
    {
        return view('privacy_policy');
    }
}