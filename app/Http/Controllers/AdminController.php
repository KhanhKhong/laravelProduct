<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Products;
use App\ProductCategories;
use App\Slide;
use App\News;
use App\About;
use App\Contact;
use App\ImagesProduct;
use Intervention\Image\Facades\Image;
use File;

class AdminController extends Controller
{
    public function index(){

    }
    // Categories
    public function categoryValidate(array $data){
        return Validator::make($data, [
                'title' => 'required',
        ]);
    }

    public function categories(){
        $categories = ProductCategories::orderBy('id','desc')->paginate(10);
        return view('admin.pages.categories.index',compact(['categories','parent']));
    }

    public function editCategory(Request $request){
        if(isset($request->id)){
            $editItems = ProductCategories::where('id','=',$request->id)->first();
        }
        $cates = ProductCategories::with('children')->where('cate_parent','=',0)->get();
        return view('admin.pages.categories.edit',compact(['cates','editItems']));
    }

    public function updateCategory(Request $request){
        $validator = $this->categoryValidate($request->all());
        if($validator->fails()) {
            return redirect()->back()
                            ->withInput($request->all())
                            ->withErrors($validator->errors());
        }
        $cate_id = $request->cate_id;
        if(!empty($request->title) && isset($cate_id)){
            $cate = ProductCategories::find($cate_id);
            // $cate = new ProductCategories;
            $cate->title = $request->title;
            $cate->cate_parent = $request->cate_parent;
            $cate->save();
        }else{
            $cate = ProductCategories::create([
                'title' => $request->get('title'),
                'cate_parent' => $request->get('cate_parent'),
            ]);
        }
        return redirect('/admin/categories');
    }

    public function deleteCategory(Request $request){

        $id = $request->id;
        $cate = ProductCategories::where('id','=',$id)->first();
        if(!empty($id)){
            $cate->delete();
        }
        return redirect('/admin/categories');
    }
    // End Categories

    // Products
    public function productValidate(array $data){
    	return Validator::make($data, [
                'picture' => 'required',
                'title' => 'required|max:100',
                'price_sale' => 'required|numeric|between:0,99.99',
                'price' => 'required|numeric|between:0,99.99',
                'total_one' => 'required|integer',
                'hot' => 'required',
                'description' => 'required',
                'category_id' => 'required',
        ]);
    }

    public function products(){

        $products = Products::orderBy('id','desc')->paginate(10);
        return view('admin.pages.products.index',compact(['products']));
    }

    public function editProduct(Request $request){
        if(isset($request->id)){
            $editItems = Products::where('id','=',$request->id)->first();
        }
    	$cate = ProductCategories::all();
    	return view('admin.pages.products.edit',compact(['cate','editItems']));
    }

    public function updateProduct(Request $request){
        $validator = $this->productValidate($request->all());
        if($validator->fails()) {
            return redirect()->back()
                            ->withInput($request->all())
                            ->withErrors($validator->errors());
        }
        if(!empty($request->file('picture'))){
            $picture = $request->file('picture');
            $strippedName = str_replace(' ', '', $picture->getClientOriginalName());
            $imgName = date('Y-m-d-H-i-s') . $strippedName;
            Image::make($picture->getRealPath())->resize(300, 300)->save(public_path() . '/source/images/products/' . $imgName, 60);
        }

        $product_id = $request->product_id;
        if(!empty($request->title) && !empty($product_id)){
            $products = Products::find($product_id);
            $products->picture = $imgName;
            $products->title = $request->title;
            $products->price_sale = $request->price_sale;
            $products->price = $request->price;
            $products->total_one = $request->total_one;
            $products->hot = $request->hot;
            $products->description = $request->description;
            $products->category_id = $request->category_id;
            $products->save();
        }else{
            $products = Products::create([
                'picture' => $imgName,
                'title' => $request->title,
                'price_sale' => $request->price_sale,
                'price' => $request->price,
                'total_one' => $request->total_one,
                'hot' => $request->hot,
                'description' => $request->description,
                'category_id' => $request->category_id,
            ]);
        }
        if(!empty($product_id)){
            $delPicture = Products::where('id','=',$product_id)->first();
            if (!empty($delPicture)) {
                File::delete('source/images/products/' . $delPicture->picture);
            }
            $images = ImagesProduct::where('product_id','=',$product_id)->get();
            if(!empty($images)){
                foreach ($images as $image) {
                    File::delete('source/images/products/' . $image->image);
                }
                ImagesProduct::where('product_id','=',$product_id)->delete();
            }
            if ( $request->hasFile( 'imageMulti' ) ) {
                $imageMultis = $request->imageMulti;
                foreach ( $imageMultis as $imageMul ) {
                    $strippedName = str_replace(' ', '', $imageMul->getClientOriginalName());
                    $filename = date('Y-m-d-H-i-s') . $strippedName;
                    Image::make($imageMul->getRealPath())->resize(300, 300)->save(public_path() . '/source/images/products/' . $filename, 60);
                    $proImage                = new ImagesProduct();
                    $proImage->image         = $filename;
                    $proImage->product_id = $product_id;
                    $proImage->save();
                }
            }
        }else{
            $idProduct = Products::orderBy('id','desc')->first();
            if ( $request->hasFile( 'imageMulti' ) ) {
                $imageMultis = $request->imageMulti;
                foreach ( $imageMultis as $imageMul ) {
                    $strippedName = str_replace(' ', '', $imageMul->getClientOriginalName());
                    $filename = date('Y-m-d-H-i-s') . $strippedName;
                    Image::make($imageMul->getRealPath())->resize(300, 300)->save(public_path() . '/source/images/products/' . $filename, 60);
                        $proImage                = new ImagesProduct();
                        $proImage->image         = $filename;
                        $proImage->product_id = $idProduct->id;
                        $proImage->save();
                }
            }
        }
        return redirect('/admin/products');
    }

    public function deleteProduct(Request $request){
        $id = $request->id;
        $item = Products::where('id','=',$id)->first();
        if(!empty($item)) {
            File::delete('source/images/products/' . $item->picture);
            $images = ImagesProduct::where('product_id','=',$id)->get();
            if(!empty($images)){
                foreach ($images as $image) {
                    File::delete('source/images/products/' . $image->image);
                }
                ImagesProduct::where('product_id','=',$id)->delete();
            }
            $item->delete();
        }
        return redirect('/admin/products');
    }
    // End Products
    // News
    public function newValidate(array $data){
        return Validator::make($data, [
                'picture' => 'required|mimes:jpeg,jpg,png | max:1000',
                'title' => 'required|max:100',
                'front_description' => 'required|max:100',
                'description' => 'required',
        ]);
    }
    public function news(){
        $news = News::orderBy('id','desc')->paginate(10);
        return view('admin.pages.news.index',compact(['news']));
    }

    public function editNew(Request $request){
        $id = $request->id;
        $editItems = News::where('id','=',$id)->first();

        return view('admin.pages.news.edit',compact(['editItems']));
    }

    public function updateNew(Request $request){
        $validator = $this->newValidate($request->all());
        if ($validator->fails()) {
            return redirect()->back()
                ->withInput($request->all())
                ->withErrors($validator->errors());
        }
        if(!empty($request->file('picture'))){
            $picture = $request->file('picture');
            $strippedName = str_replace(' ', '', $picture->getClientOriginalName());
            $imgName = date('Y-m-d-H-i-s') . $strippedName;
            Image::make($picture->getRealPath())->resize(283, 346)->save(public_path() . '/source/images/news/' . $imgName, 60);
        }
        $new_id = $request->new_id;
        if(!empty($request->title) && !empty($new_id)){
            $delPicture = News::where('id','=',$new_id)->first();
            if (!empty($delPicture)) {
                File::delete('source/images/news/' . $delPicture->picture);
            }
            $news = News::find($new_id);
            $news->picture = $imgName;
            $news->title = $request->title;
            $news->front_description = $request->front_description;
            $news->description = $request->description;
            $news->save();
        }else{
            $news = News::create([
                'picture' => $imgName,
                'title' => $request->title,
                'front_description' =>$request->front_description,
                'description' => $request->description,
            ]);
        }


        return redirect('/admin/news');
    }

    public function deleteNew(Request $request){
        $id = $request->id;
        $item = News::where('id','=',$id)->first();
        if(!empty($item)) {
            File::delete('source/images/news/' . $item->picture);
            $item->delete();
        }
        return redirect('/admin/news');
    }
    //End News



    // About
    public function aboutValidate(array $data){
        return Validator::make($data, [
                'description' => 'required',
        ]);
    }
    public function about(){
        $about = About::orderBy('id','desc')->paginate(10);
        return view('admin.pages.about.index',compact(['about']));
    }

    public function editAbout(Request $request){
        $id = $request->id;
        $editItems = About::where('id','=',$id)->first();

        return view('admin.pages.about.edit',compact(['editItems']));
    }

    public function updateAbout(Request $request){
        $validator = $this->aboutValidate($request->all());
        if ($validator->fails()) {
            return redirect()->back()
                ->withInput($request->all())
                ->withErrors($validator->errors());
        }

        $about_id = $request->about_id;
        if(!empty($about_id)){
            $about = About::find($about_id);
            $about->description = $request->description;
            $about->save();
        }else{
            $about = About::create([
                'description' => $request->description,
            ]);
        }


        return redirect('/admin/about');
    }

    public function deleteAbout(Request $request){
        $id = $request->id;
        $item = About::where('id','=',$id)->first();
        if(!empty($item)) {
            $item->delete();
        }
        return redirect('/admin/about');
    }
    //End About

    // Contact
    public function contactValidate(array $data){
        return Validator::make($data, [
                'description' => 'required',
                'information' => 'required',
        ]);
    }
    public function contact(){
        $contact = Contact::orderBy('id','desc')->paginate(10);
        return view('admin.pages.contact.index',compact(['contact']));
    }

    public function editContact(Request $request){
        $id = $request->id;
        $editItems = Contact::where('id','=',$id)->first();

        return view('admin.pages.contact.edit',compact(['editItems']));
    }

    public function updateContact(Request $request){
        $validator = $this->contactValidate($request->all());
        if ($validator->fails()) {
            return redirect()->back()
                ->withInput($request->all())
                ->withErrors($validator->errors());
        }

        $contact_id = $request->contact_id;
        if(!empty($contact_id)){
            $contact = Contact::find($contact_id);
            $contact->description = $request->description;
            $contact->information = $request->information;
            $contact->save();
        }else{
            $contact = Contact::create([
                'description' => $request->description,
                'information' => $request->information,
            ]);
        }


        return redirect('/admin/contact');
    }

    public function deleteContact(Request $request){
        $id = $request->id;
        $item = Contact::where('id','=',$id)->first();
        if(!empty($item)) {
            $item->delete();
        }
        return redirect('/admin/contact');
    }
    //End Contact

    //slides
    public function slideValidate(array $data){
        return Validator::make($data, [
                'title' => 'required|max:100',
                'sub_title' => 'required|max:100',
                'slide_picture' => 'required|mimes:jpeg,jpg,png | max:1000',
        ]);
    }

    public function slides(){
        $slides = Slide::orderBy('id','desc')->paginate(10);
        return view('admin.pages.slides.index',compact(['slides']));
    }

    public function editSlide(Request $request){
        if(isset($request->id)){
            $editItems = Slide::where('id','=',$request->id)->first();
        }
        return view('admin.pages.slides.edit',compact(['editItems']));
    }

    public function updateSlide(Request $request){
        $validator = $this->slideValidate($request->all());
        if ($validator->fails()) {
            return redirect()->back()
                ->withInput($request->all())
                ->withErrors($validator->errors());
        }

        if(!empty($request->file('slide_picture'))){
            $slide_picture = $request->file('slide_picture');
            $strippedName = str_replace(' ', '', $slide_picture->getClientOriginalName());
            $imgName = date('Y-m-d-H-i-s') . $strippedName;
            Image::make($slide_picture->getRealPath())->resize(890, 388)->save(public_path() . '/source/images/' . $imgName, 60);
        }

        $slide_id = $request->slide_id;
        if(!empty($request->title) && !empty($slide_id)){
            $delPicture = Slide::where('id','=',$slide_id)->first();
            if (!empty($delPicture)) {
                File::delete('source/images/' . $delPicture->slide_picture);
            }
            $slides = Slide::find($slide_id);
            $slides->title = $request->title;
            $slides->sub_title = $request->sub_title;
            $slides->slide_picture = $imgName;
            $slides->save();
        }else{
            $slides = Slide::create([
                'title' => $request->title,
                'sub_title' =>$request->sub_title,
                'slide_picture' => $imgName,
            ]);
        }

        return redirect('/admin/slides');
    }

    public function deleteSlide(Request $request){
        $id = $request->id;
        $slide = Slide::where('id','=',$id)->first();
        if(!empty($slide)) {
            File::delete('source/images/' . $slide->slide_picture);
            $slide->delete();
        }
        return redirect('/admin/slides');
    }
    //End slides
}
