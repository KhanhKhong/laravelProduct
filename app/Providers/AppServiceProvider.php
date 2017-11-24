<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use App\ProductCategories;
use App\Products;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(255);
        View::composer(['master','pages.about','pages.home','pages.products','pages.product-detail','pages.contact','pages.news','pages.new-detail','pages.cart','pages.search','layouts.nav'],function($view){
            $cates = ProductCategories::with('children')->where('cate_parent','=',0)->get();
            $products_sale = Products::where('price_sale','>','0')
                                ->orderBy('id','desc')->paginate(2);
            $view->with(['cates'=>$cates, 'products_sale'=>$products_sale]);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
