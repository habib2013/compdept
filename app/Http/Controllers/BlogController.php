<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;
use Auth;       
use Intervention\Image\Facades\Image;
use App\Course;
use App\Blog;
use Illuminate\Database\Eloquent\Collection;
use Webpatser\Uuid\Uuid;

use Validator;
use App\AjaxImage;

use DB;


class BlogController extends Controller
{
    public function mycourseslug($courseslug){
                     
                            
        $sluggie = Course::where('courseslug','=',$courseslug)->firstorFail();
    
        return view(' courses.course_single',compact('sluggie'));

}

public function myblogslug($slug){
                     
                            
    $slug = Blog::where('slug','=',$slug)->firstorFail();

    return view(' blog.blog_single',compact('slug'));

}

public function allblog (){
    return view ("blog.blog_index");
}

}
