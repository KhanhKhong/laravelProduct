<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\ProductCategories;
use App\ImagesProduct;
use App\News;
use App\Slide;
use App\About;
use App\Contact;


class PageController extends Controller
{
    public function home(){
        $products = Products::orderBy('id','desc')->paginate(4);
        $products_sale = Products::where('price_sale','>','0')
                                ->orderBy('id','desc')->paginate(10);
        $products_hot = Products::where('hot','=','1')
                                ->orderBy('id','desc')->paginate(5);
        $phones = Products::where('category_id','=','1')
                            ->orderBy('id','desc')->paginate(8);
        $slide = Slide::get();
        $news = News::orderBy('id','desc')->paginate(10);
        $accessories = Products::where('category_id','=','4')
                                ->orWhere('category_id','=','5')
                                ->orWhere('category_id','=','6')->get();

    	return view('pages.home',
            compact(['products','slide','products_sale','phones','products_hot','news','accessories']));
    }
    
    public function products($Category_id){
        $cateName = ProductCategories::where('id','=',$Category_id)->first();
        $productOfCate = Products::where('category_id','=',$Category_id)->paginate(8);
    	return view('pages.products',compact(['productOfCate','cateName']));
    }

    public function product_detail($product_id){
        $details = Products::where('id','=',$product_id)->first();
        $category_id = ProductCategories::where('id','=',$details->category_id)->first();
        $slides = ImagesProduct::where('product_id','=',$product_id)->paginate(6);
        $products = Products::where('category_id','=',$details->category_id)->where('id','<>',$product_id)->orderBy('id','desc')->paginate(8);
    	return view('pages.product-detail',compact(['details','category_id','slides','products']));
    }
    
    public function news(){
        $news = News::orderBy('id','desc')->paginate(5);
    	return view('pages.news',compact(['news']));
    }
    public function new_detail($id){
        $detail = News::where('id','=',$id)->first();
        $news = News::where('id','<>',$id)->orderBy('id','desc')->paginate(6);
    	return view('pages.new-detail',compact(['detail','news']));
    }
    public function about(){
        $description = About::first();
        return view('pages.about',compact('description'));
    }
    public function contact(){
        $description = Contact::first();
        return view('pages.contact',compact('description'));
    }

    public function search(Request $request){

        if(!empty($request->search)){
            $products = Products::where('title','like','%'.$request->search.'%')
                                ->orWhere('price','like','%'.$request->search.'%')->paginate(8);
            $news = News::where('title','like','%'.$request->search.'%')->paginate(8);
        }

        return view('pages.search',compact(['products','news']));
    }
}
