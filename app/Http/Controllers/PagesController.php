<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PagesController extends Controller
{
    
    public function home()
    {
        $user = Auth::user();
        // ddd($user);
        return view('index',['data'=>$user]); //var data di view diisi dengan nilai dari var $user di sini
    }

    public function about()
    {
        return view('about');
    }
}
