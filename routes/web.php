<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

//Frontend Routes
Route::get('phpthumb', function(){
$img = Image::make(file_get_contents('images/8.jpg'));
// resize image instance
$img->resize(320, 240);
$img->save('808.jpg');
return Response::make($img, 200, ['Content-Type' => 'image/jpg']);
  //return view('phpthumb');
});

Route::get('/', 'FrontEndController@index');
Route::get('index',  'FrontEndController@index');
Route::get('404', 'FrontEndController@error_page');
Route::get('cart', 'FrontEndController@cart');
Route::get('checkout', 'FrontEndController@checkout');
Route::get('checkout/confirmation','CustomerController@confirmCheckout');
Route::get('checkout/success','CustomerController@checkoutSuccess');
Route::get('contact-us', 'FrontEndController@contactUs');
Route::post('contact-us', 'ContactController@sendMessage');
Route::get('product/{id}', 'FrontEndController@productDetails');
Route::get('products', 'FrontEndController@products');
Route::get('category/{id}','FrontEndController@getProductsByCategory');
Route::get('brand/{id}','FrontEndController@getProductsByBrand');

//Cart API
Route::put('cart/add', 'CartController@addToCart');
Route::delete('cart/item/delete','CartController@deleteCartItem');
Route::get('cart/contents','CartController@cartContents');
Route::get('cart/total', 'CartController@cartTotal');
Route::post('cart/manageItems','CartController@manageItems');

//Customer routes
Route::group(['middleware'=>'App\Http\Middleware\customerAuth'], function(){
  Route::get('account','CustomerController@account');
  Route::get('account/{username}', 'CustomerController@customerAccount');
  Route::post('customer/setting', 'CustomerController@postSetting');
});
Route::post('signup', 'CustomerController@addCustomer');
Route::get('login', function(\Illuminate\Http\Request $request){
  if($request->session()->has('customer')){
    return redirect('account');
  }
    return view('public/pages/login')->with(['countries'=>\App\Country::all()]);
});
Route::post('login', 'CustomerController@login');
Route::get('logout', 'CustomerController@logout');
Route::get('customer', function(\Illuminate\Http\Request $request){
  return $request->session()->get('customer');
});


//Admin Routes
Route::get('es/admin/login', function (){
  if(Auth::check()){
      return redirect('es/admin/dashboard');
  } else {
      return view('admin/login');
  }
});
Route::post('es/admin/login','Auth\LoginController@login');
Route::get('es/admin/logout','Auth\LoginController@logout');
Route::group(['prefix'=>'es/admin', 'middleware'=>'auth.basic'], function(){

  Route::get('/', function(){
    return view('admin/admin');
  });

  Route::get('dashboard', function(){
    return view('admin/admin');
  });

  //User Routes
  Route::get('profile', 'UserController@profile');
  Route::get('setting', 'UserController@getSetting');
  Route::post('setting', 'UserController@postSetting');

  //Admin user routes
  Route::get('user/{id}/edit','UserController@getEditUser');
  Route::post('user/{id}/edit','UserController@postEditUser');
  Route::get('user/{id}/activate','UserController@activate');
  Route::get('user/{id}/deactivate','UserController@deactivate');
  Route::get('user/{id}/delete','UserController@deleteUser');
  Route::get('user/{id}/restore','UserController@restoreUser');
  Route::get('user/{id}/forceDelete', 'UserController@deletePermanently');
  Route::get('adduser', 'UserController@addUserForm');
  Route::post('adduser', 'UserController@addUser');
  Route::get('viewusers', 'UserController@viewUsers');

  //Customer routes
  Route::get('customers', 'CustomerController@customers');
  Route::get('customer/{id}/delete', 'CustomerController@delete');
  Route::get('customer/{id}/restore', 'CustomerController@restore');
  Route::get('customer/{id}/forceDelete', 'CustomerController@deletePermanently');
  
  //Admin brand routes
  Route::get('addbrand', function(){
    return view('admin/pages/brand/addbrand');
  });
  Route::post('addbrand', 'BrandController@addbrand');
  Route::get('viewbrands', 'BrandController@viewbrands');
  Route::get('brand/{id}/edit', 'BrandController@getEditBrand');
  Route::post('brand/{id}/edit', 'BrandController@postEditBrand');
  Route::get('brand/{id}/delete', 'BrandController@deleteBrand');
  Route::get('brand/{id}/restore', 'BrandController@restoreBrand');

  //Admin category routes
  Route::get('addcategory', function(){
    return view('admin/pages/category/addcategory');
  });
  Route::post('addcategory', 'CategoryController@addCategory');
  Route::get('viewcategories', 'CategoryController@viewCategories');
  Route::get('category/{id}/edit','CategoryController@getEditCategory');
  Route::post('category/{id}/edit','CategoryController@postEditCategory');
  Route::get('category/{id}/delete','CategoryController@deleteCategory');
  Route::get('category/{id}/restore','CategoryController@restoreCategory');

  //Admin product routes
  Route::get('addproduct', 'ProductController@addProductView');
  Route::post('addproduct', 'ProductController@addProduct');
  Route::get('viewproducts', 'ProductController@viewProducts');
  Route::get('product/{id}/delete','ProductController@deleteProduct');
  Route::get('product/{id}/restore','ProductController@restoreProduct');
  Route::get('product/{id}/edit', 'ProductController@getEditProduct');
  Route::post('product/{id}/edit', 'ProductController@postEditProduct');

  //User Group Routes
  Route::get('addusergroup','UserGroupController@getAddUsergroup');
  Route::post('addusergroup','UserGroupController@postAddUserGroup');
  Route::get('viewusergroup','UserGroupController@viewusergroup');
  Route::get('usergroup/{id}/edit','UserGroupController@getEditUserGroup');
  Route::post('usergroup/{id}/edit','UserGroupController@postEditUserGroup');
  Route::get('usergroup/{id}/delete','UserGroupController@deleteUsergroup');
  Route::get('usergroup/{id}/addpermission', 'UserGroupController@getAddPermission');
  Route::post('usergroup/{id}/addpermission', 'UserGroupController@postAddPermission');
  Route::get('usergroup/{id}/viewpermissions', 'UserGroupController@viewPermissions');
  Route::post('usergroup/{id}/viewpermissions', 'UserGroupController@editPermission');

  //Permission routes
  Route::get('addpermission', 'PermissionController@getAddPermission');
  Route::post('addpermission', 'PermissionController@postAddPermission');
  Route::get('viewpermissions', 'PermissionController@viewPermissions');
  Route::get('permission/{id}/edit', 'PermissionController@getEditPermission');
  Route::post('permission/{id}/edit', 'PermissionController@postEditPermission');
  Route::get('permission/{id}/delete', 'PermissionController@deletePermission');

  //Contact Us
  Route::get('viewcontacts', 'ContactController@viewcontacts');
  Route::get('contact/{id}/view','ContactController@viewcontact');
  Route::get('contact/{id}/reply','ContactController@reply');
  Route::get('contact/{id}/delete','ContactController@delete');

  //Country
  Route::get('viewcountries', 'CountryController@viewcountries');
  Route::get('country/add', 'CountryController@getAddCountry');
  Route::post('country/add', 'CountryController@postAddCountry');
  Route::get('country/{id}/edit', 'CountryController@getEditCountry');
  Route::post('country/{id}/edit', 'CountryController@postEditCountry');
  Route::get('country/{id}/delete', 'CountryController@deleteCountry');

  //Trash
  Route::get('trash/user', 'TrashController@trashedUsers');
  Route::get('trash/customer', 'TrashController@trashedCustomers');
  Route::get('trash/brand', 'TrashController@trashedBrands');
  Route::get('trash/category', 'TrashController@trashedCategories');
  Route::get('trash/product', 'TrashController@trashedProducts');

  Route::get('upload', function(){
    return view('admin/upload');
  });

  Route::post('image/upload', function(\Illuminate\Http\Request $request){
    $files = $request->file('file');
    if($files){
      foreach ($files as $file) {
        \Storage::put($file->getClientOriginalName(), file_get_contents($file));
      }
    }
    return \Response::json(['success' => true]);
  });

});

Route::post('image/upload', function(\Illuminate\Http\Request $request){
  $files = $request->file('file');
  if($files){
    foreach ($files as $file) {
      $file->store('uploads');
    }
  }
  return \Response::json(['success' => true]);
});