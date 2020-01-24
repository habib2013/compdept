<?php

namespace App;
use \App\User;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

    
    protected $fillable = ['description', 'duration','quiz','lectures','percentage','coursecode','coursename','user_id','status','unit','cv'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
