<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Feature;
use Illuminate\Http\Request;

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
        $blog = Blog::find($id)->first();
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
