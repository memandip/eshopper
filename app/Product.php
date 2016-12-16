<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Category;
use App\Brand;

class Product extends Model
{
    use SoftDeletes;
    protected $table = 'products';
    protected $fillable = ['product_name','price','short_desc','long_desc','status','shipping','brand_id','category_id','gender'];
    protected $dates = ['deleted_at'];

    public function categoryName($id){
      $category = Category::withTrashed()->findOrFail($id);
      return $category->category_name;
    }

    public function brandName($id){
      $brand = Brand::withTrashed()->findOrFail($id);
      return $brand->brand_name;
    }

    public function getBrand($id){
      $brand = Brand::findOrFail($id);
      return $brand;
    }

    public function getCategory($id){
      $category = Category::findOrFail($id);
      return $category;
    }

}
