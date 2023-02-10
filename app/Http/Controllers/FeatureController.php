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
    public function writer() {
        return view('login-writer');
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