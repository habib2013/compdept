<?php

namespace App\Http\Controllers;
use App\User;
use App\Post;
use Auth;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

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

    $imagepath = request('image')->store('uploads','public');
    $image = Image::make(public_path("storage/{$imagepath}"))->resize(550,400);
    $image->save();

        auth()->user()->posts()->create([
            'title'=>$data['title'],
            'body' => $data['body'],
            'image'=>$imagepath
        ]);
                return redirect('/profile/'.auth()->user()->id);
//dd(request()->all());

}

}
