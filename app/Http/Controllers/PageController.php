<?php

namespace App\Http\Controllers;

use App\HoSo;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $hosos = HoSo::all();
        return view('page.trang-chu', compact('hosos'));
    }
    public function getTrangDangKy(){
        return view('page.dang-ky');
    }

}
