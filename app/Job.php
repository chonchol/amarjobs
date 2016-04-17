<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    //
    protected $table = "jobs";
    public $fillable = ["jobTitle","jobSummary","jobDescription","jobType","jobLocation","applicationEndDate","salary","applicationInstruction","featuredJob","numberOfPosition","minimumExperience","minimumAge","others"];


}
