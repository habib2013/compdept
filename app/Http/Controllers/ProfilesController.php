<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;
use Auth;       
use Intervention\Image\Facades\Image;

class ProfilesController extends Controller
{
                public function __construct(){
                        return $this->middleware('auth');
                }

        public function user($username){
                $user = User::where('username','=',$username)->firstorFail();
                return view('profiles.index')->withUser($user);

               // $user = User::where('username','=','$username')->first();
        // $user = User::findOrFail($user);
        // return view('profiles.index',['user'=>$user]);


        }

        public function settings($username){

       // $this->authorize('update',$user->profile);

        $user = User::where('username','=',$username)->firstorFail();
        return view('profiles.edit')->withUser($user);

      //  return view('profiles.edit',['user'=>$user]);

        }

        public function update(User $user){
                $data = request()->validate([
                        'birthday'=>'',
                        'gender'=>'',
                        'phone'=>'',
                        'address'=>'',
                        'city'=>'',
                        'skills'=>'',
                        'bio'=>'',
                        'country'=>'',
                        'profileimage'=>'',
                        'coverimage'=>'',
          
                ]);    

                if(request('coverimage')){
                        $imagepath = request('coverimage')->store('profiles','public');
                         $image = Image::make(public_path("storage/{$imagepath}"))->resize(200,250);
                        $image->save();

                        $imageArray = ['coverimage'=>$imagepath];
                }

             auth()->user()->profile->update(array_merge(
                $data,$imageArray ?? []
            ));
            return redirect('/'.$user->username);
        }
}
