<?php

namespace App\Http\Controllers;
use App\User;
use Auth;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function _construct(){
    $this->middleware('auth');
    }
   


public function create(){

return view('posts.index');
}

public function store(){
    $data = request()->validate([
          'title'=>'required',
          'body'=>'required',
          'image'=>['required','image']

    ]);

    dd(request('image')->store('uploads','public'));

        auth()->user()->posts()->create($data);

dd(request()->all());

}
}
