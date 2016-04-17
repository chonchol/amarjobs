<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    //
    protected $table = "skills";
    public $fillable = ["sortInd","skillName"];
}
