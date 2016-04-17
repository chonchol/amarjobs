<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    protected $table = "profiles";
    public $fillable = ["userID","firstName","lastName","middleName","DOB","gender","featuredProfile","email","phone","summary","profilePic"];

    public function user(){
        return $this->belongsTo('App\User');
   }
}
