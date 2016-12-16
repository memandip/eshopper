<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;
use Response;

use App\Product;
use App\Category;
use App\Brand;
use Validator;

class ProductController extends Controller
{

  public function addProductView(){
    $data['categories'] = Category::all();
    $data['brands'] = Brand::all();
    return view('admin/pages/product/addproduct',$data);
  }

  public function addProduct(Request $request){
    $input = $request->all();
    $validator = Validator::make($input, [
      'product_name'=>'required',
      'price'=>'required',
      'short_desc'=>'required',
      'long_desc'=>'required',
      'image'=>'required'
    ]);
    if($validator->fails()){
      return redirect()->back()->withInput()->withErrors($validator);
    } else {
      $extensions = ['jpg', 'jpeg', 'png', 'gif', 'bmp'];
      $file = $request->file('image');
      if(in_array($file->getClientOriginalExtension(), $extensions) && $request->hasFile('image') && $file->isValid()){
        $fileName = time().$file->getClientOriginalName();
        $file->storeAs('images/products/', $fileName);
        $file->move('images/products/',$fileName);
        $product = new Product;
        $product->product_name = $input['product_name'];
        $product->price = $input['price'];
        $product->short_desc = $input['short_desc'];
        $product->long_desc = $input['long_desc'];
        $product->status = $input['status'];
        $product->shipping = $input['shipping'];
        $product->brand_id = $input['brand'];
        $product->category_id = $input['category'];
        $product->gender = $input['gender'];
        $product->image = $fileName;
        $product->save();
        return redirect()->back()->with(['success'=>'One product added successfully.']);
      } else {
        return redirect()->back()->withInput()->withErrors(['Something went wrong. Unable to add the product.']);
      }
    }
  }

  public function viewProducts(){
    $data['sn'] = 0;
    $data['category'] = new \App\Category;
    $data['brand'] = new \App\Brand;
    $data['products'] = Product::withTrashed()->get();
    return view('admin/pages/product/viewproducts')->with($data);
  }

  public function deleteProduct($id){
    $product = Product::findOrFail($id);
    $product->delete();
    return Response::json(['success'=>'One product deleted.']);
  }

  public function restoreProduct($id){
    $product = Product::withTrashed()->where(['id'=>$id]);
    $product->restore();
    return Response::json(['success'=>'One product restored.']);
  }

  public function getEditProduct($id){
    $data['product'] = Product::findOrFail($id);
    $data['categories'] = Category::all();
    $data['brands'] = Brand::all();
    return view('admin/pages/product/editproduct')->with($data);
  }

  public function postEditProduct($id, Request $request){
    $product = Product::findOrFail($id);
    $input = $request->all();
    $validator = Validator::make($input, [
      'product_name'=>'required',
      'price'=>'required',
      'short_desc'=>'required',
      'long_desc'=>'required'
    ]);

    if($validator->fails()){
      return redirect()->back()->withInput()->withErrors($validator);
    } else {
      $extensions = ['jpg', 'jpeg', 'png', 'gif', 'bmp'];
      $file = $request->file('image');
      if(!empty($file)){
        if(in_array($file->getClientOriginalExtension(), $extensions) && $request->hasFile('image') && $file->isValid()){
          $fileName = time().$file->getClientOriginalName();
          $product->image = $fileName;
          $file->storeAs('images/products/', $fileName);
          $file->move('images/products/',$fileName);
        } else {
          return redirect()->back()->withInput()->withErrors(['Something went wrong. Unable to add the product.']);
        }
      }

      $product->product_name = $input['product_name'];
      $product->price = $input['price'];
      $product->short_desc = $input['short_desc'];
      $product->long_desc = $input['long_desc'];
      $product->status = $input['status'];
      $product->shipping = $input['shipping'];
      $product->brand_id = $input['brand'];
      $product->category_id = $input['category'];
      $product->gender = $input['gender'];
      $product->save();
      return redirect()->back()->with(['success'=>'One product updated successfully.']);
    }
  }

}
