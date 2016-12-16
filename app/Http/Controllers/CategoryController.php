<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Response;
use Validator;
use App\Category;

class CategoryController extends Controller
{
    public function addCategory(Request $request){
      $input = $request->all();
      $validate = Validator::make($input, ['category_name'=>'required']);
      if($validate->fails()){
        return redirect()->back()->withInput()->withErrors($validate);
      } else {
        $category = new Category;
        $category->category_name = $input['category_name'];
        $category->save();
        return redirect()->back()->with(['success'=>'One category is successfully added.']);
      }
    }

    public function viewCategories(){
      $data['categories'] = Category::withTrashed()->get();
      $data['sn'] = 0;
      return view('admin/pages/category/viewcategories')->with($data);
    }

    public function getEditCategory($id){
      $data['category'] = Category::findOrFail($id);
      return view('admin/pages/category/editcategory')->with($data);
    }

    public function postEditCategory($id, Request $request){
      $category = Category::findOrFail($id);
      $input = $request->all();
      $validate = Validator::make($input, ['category_name'=>'required']);
      if($validate->fails()){
        return redirect()->back()->withInput()->withErrors($validate);
      } else {
        $category->category_name = $input['category_name'];
        $category->save();
        return redirect()->back()->with(['success'=>'Category is successfully updated.']);
      }
    }

    public function deleteCategory($id){
      $category = Category::findOrFail($id);
      $category->delete();
      return Response::json(['success'=>'One category is deleted']);
    }

    public function restoreCategory($id){
      $category = Category::withTrashed()->where(['id'=>$id]);
      $category->restore();
      return Response::json(['success'=>'One category is successfully restored.']);
    }

}
