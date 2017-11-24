<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = "contact";
    protected $primary = "id";
    protected $fillable = [
    	'id','description','information','created_at','updated_at'
    ];
}
