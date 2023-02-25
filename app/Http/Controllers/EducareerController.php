<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EducareerController extends Controller
{
    public function index()
    {
        return view('educareer_listclass');
    }
    public function mentor()
    {
        return view('pilih_mentor');
    }
    public function kelas()
    {
        return view('detail-class');
    }
    public function flap()
    {
        return view('flap');
    }
    public function slicing(){
        return view('slicing_blog');
    }
}
