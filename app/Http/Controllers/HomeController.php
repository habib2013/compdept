<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Course;
use App\Blog;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
  
    public function index()
    {
        $allcourse = new Course();
        $course = $allcourse->all()->take(3); 

        $allblog = new Blog();
        $blog = $allblog ->all()->take(2);
        
        
     return view('home',compact('course','blog'));
        // return view('home');
    }

   
}
