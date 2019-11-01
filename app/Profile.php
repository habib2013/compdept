<?php

namespace App;
use \App\User;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];
    public function profileImage(){
        $imagepath = ($this->coverimage) ? $this->coverimage: 'profiles/pgwqJVT69GSNmS4Cm3dnfKTYLQ1f9PKHysIYk8Bl.jpeg';
        return '/storage/'. $imagepath;
    }

    public function followers(){
        return $this->belongsToMany(User::class);
    }
    public function user(){
       return $this->belongsTo(User::class);
    }      
}
