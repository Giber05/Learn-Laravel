<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;


class PagesController extends Controller
{
    public function home()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }
}
