<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
{
  use SoftDeletes;

  protected $table = 'brands';

  protected $fillable = ['brand_name'];

  protected $dates = ['deleted_at'];

  public function hasChild($id){
    $product = \App\Product::where(['brand_id'=>$id])->count();
    $result = $product ? $product : false;
    return $result;
  }

}
