<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Response;

use App\Brand;

use App\Category;

use App\Product;

use App\User;

use DB;

use Cart;

class FrontEndController extends Controller
{
  
  protected $data;

  public function __construct(){
    $this->data['products'] = DB::table('products')->take(9)->where('status',1)->get();
    $this->data['categories'] = Category::all();
    $this->data['ctabs'] = Category::all();
    $this->data['brands'] = Brand::all();
    $this->data['countries'] = \App\Country::all();
  }

  public function index(){
    $this->data['homeActive'] = 'active';
    return view('public/pages/index',$this->data);
  }

  public function blogSingle(){
    $this->data['blogSingleActive'] = 'active';
    return view('public/pages/blog-single', $this->data);
  }

  public function products(){
    $this->data['products'] = \App\Product::where('status',1)->paginate(9);
    $this->data['productActive'] = 'active';
    return view('public/pages/shop', $this->data);
  }

  public function productDetails($id){
    $this->data['productDetailsActive'] = 'active';
    $this->data['product'] = Product::find($id);
    return view('public/pages/product-details', $this->data);
  }

  public function contactUs(){
    $this->data['contactActive'] = 'active';
    return view('public/pages/contact-us', $this->data);
  }

  public function checkout(){
    $this->data['checkoutActive'] = 'active';
    return view('public/pages/checkout', $this->data);
  }

  public function cart(){
    $this->data['cartActive'] = 'active';
    return view('public/pages/cart', $this->data);
  }

  public function error_page(){
    return view('errors/404');
  }

  public function category($id){
    $this->data['category'] = \App\Category::findOrFail($id);
    return view('category');
  }

  public function confirmCheckout(){
    return view('public/pages/confirmation');
  }

  public function getProductsByCategory($id){
    $this->data['products'] = Product::where(['category_id'=>$id])->paginate(9);
    $this->data['category'] = \App\Category::findOrFail($id)->category_name;
    return view('public/pages/productOfCategory')->with($this->data);
  }

  public function getProductsByBrand($id){
    $this->data['products'] = Product::where(['brand_id'=>$id])->paginate(9);
    $this->data['brand'] = \App\Brand::findOrFail($id)->brand_name;
    return view('public/pages/productOfCategory')->with($this->data);
  }

}