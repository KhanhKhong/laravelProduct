<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = "products";
    protected $primary = "id";
    protected $fillable = [
        'picture','title','price_sale','price','total_one','hot','description','category_id','created_at','updated_at'
    ];

    public function images_product(){
    	return $this->HasMany('App\ImagesProduct','product_id','id');
    } 

    public function product_categories(){
    	return $this->belongsTo('App\ProductCategories','category_id','id');
    }
}
