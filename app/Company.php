<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
    protected $table = "companies";
    public $fillable = ["companyName","city","district","postcode","address","phone","email","website","logo"];
}
