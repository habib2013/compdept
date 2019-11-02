<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminsController extends Controller
{
 public function verify(){
    $user = new User();
    $userall = $user::all();
     return view('admin.verifyuser',compact('userall'));
 }


}
