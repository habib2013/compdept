<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\User;

class Blog extends Model
{
    protected $fillable = ['post_image', 'body','title','slug','user_id'];


    public function user(){
        return $this->belongsTo(User::class);
     }     
}
