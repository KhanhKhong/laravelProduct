<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    protected $table = "slide";
    protected $primary = "id";
    protected $fillable = [
    	'title','sub_title','slide_picture','created_at','updated_at'
    ];
}
