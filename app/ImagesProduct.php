<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImagesProduct extends Model
{
    protected $table = "images_product";
    protected $primary = "id";
    protected $fillable = [
        'image','product_id','created_at','updated_at'
    ];
    
    public function products() {
		return $this->belongsTo('App\Products','product_id','id');
	}
}
