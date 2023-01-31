<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EducareerController extends Controller
{
    public function index()
    {
        return view('list_class');
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
}
