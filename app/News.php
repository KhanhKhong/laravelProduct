<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
	protected $table = "news";
    protected $primary = "id";
    protected $fillable = [
        'picture','title','front_description', 'description','created_at','updated_at'
    ];
}
