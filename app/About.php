<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table = "about";
    protected $primary = "id";
    protected $fillable = [
    	'id','description','created_at','updated_at'
    ];
}
