<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Brand;

use Validator;

use Response;

class BrandController extends Controller
{

    public function addbrand(Request $request){

      $input = $request->all();
      $validate = Validator::make($input, [
        'brand_name'=>'required'
      ]);

      if($validate->fails()){
        return redirect()->back()->withInput()->withErrors($validate);
      } else {
        $brand = new Brand;
        $brand->brand_name = $input['brand_name'];
        $brand->save();
        return redirect()->back()->with(['success'=>'One Brand is successfully added.']);
      }

    }

    public function viewbrands(){
      $data['brands'] = Brand::withTrashed()->get();
      $data['sn'] = 0;
      return view('admin/pages/brand/viewbrands',$data);
    }

    public function getEditBrand($id){
      $data['brand'] = Brand::findOrFail($id);
      return view('admin/pages/brand/editbrand',$data);
    }

    public function postEditBrand($id, Request $request){
      $brand = Brand::findOrFail($id);
      $input = $request->all();
      $validate = Validator::make($input, [
        'brand_name'=>'required'
      ]);
      if($validate->fails()){
        return redirect()->back()->withInput()->withErrors($validate);
      } else {
        $brand->brand_name = $input['brand_name'];
        $brand->save();
        return redirect()->back()->with(['success'=>'Brand is successfully updated.']);
      }

    }

    public function deleteBrand($id){
      $brand = Brand::findOrFail($id);
      $brand->delete();
      return Response::json(['success'=>'One brand is successfully deleted.']);
    }


    public function restoreBrand($id){
      $brand = Brand::withTrashed()->where(['id'=>$id]);
      $brand->restore();
      return Response::json(['success'=>'One brand is successfully restored.']);
    }


}
