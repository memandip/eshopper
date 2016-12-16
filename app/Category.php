<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    protected $table = 'categories';
    protected $fillable = ['category'];
    protected $dates = ['deleted_at'];

  	public function hasChild($id){
  		$product = \App\Product::where(['category_id'=>$id])->count();
      $result = $product ? true : false;
      return $result;
  	}

    public function getAllChildren($id){
      $product = \App\Product::where(['category_id'=>$id])->get();
      return $product;
    }

    public function productName($id){
      $product = \App\Product::where(['category_id'=>$id]);
      return $product->product_name;
    }

    public function getProduct($id){
      $product = \App\Product::findOrFail($id);
      return $product;
    }

}
