<?php

namespace App\Http\Controllers;

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
    public function writer() {
        return view('login-writer');
    }
    public function dashboard() {
        return view('dashboard-writer');
    }
    public function create() {
        return view('create-blog-writer');
    }
    public function uploaded() {
        return view('uploaded-writer');
    }
    public function schedule() {
        return view('schedule-writer');
    }
    public function detail() {
        return view('detail-blog');
    }
    public function detailMentor()
    {
        return view('detail-mentor');
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