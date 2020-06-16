<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model {
    
    protected $fillable = ['name','email'];

    function display_name_and_email(){
        echo $this->name. " : " .$this->email;
    }

    function posts(){
        return $this->hasMany(\App\Post::class);
    }
}
