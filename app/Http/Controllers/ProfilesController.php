<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfilesController extends Controller
{
        public function user($user){
        $user = User::findOrFail($user);
        return view('profiles.index',['user'=>$user]);
        }

        public function settings($user){
        $user = User::findOrFail($user);
        return view('settings.index',['user'=>$user]);
        }
}
