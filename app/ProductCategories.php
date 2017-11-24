<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategories extends Model
{
    protected $table = "product_categories";
    protected $primary = "id";
    protected $fillable = [
        'title', 'cate_parent','created_at','updated_at'
    ];

    public function products(){
    	return $this->hasMany('App\Products','category_id','id');
    }

    public function parent()
    {
        return $this->belongsTo('App\ProductCategories', 'cate_parent');
    }
 
    public function children()
    {
        return $this->hasMany('App\ProductCategories', 'cate_parent');
    }
    
}
