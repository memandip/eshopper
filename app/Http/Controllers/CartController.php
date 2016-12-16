<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Response;

use Cart;

use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{

  // public function cart(){
  //   return Auth::user();
  //   if(Cart::content()->count()>0){
  //     foreach(Cart::content() as $cart){
  //       Cart::setTax($cart->rowId, 0);
  //       $product = \App\Product::findOrFail($cart->id);
  //       if($product){
  //         $image = $product->image;
  //       } else {
  //         $image = '';
  //       }
  //       $data['cartContents'][] = ['rowId'=>$cart->rowId,'id'=>$cart->id,'name'=>$cart->name,'price'=> $cart->price, 'qty'=>$cart->qty, 'total'=>$cart->total,'image'=>$image];
  //     }
  //     $data['cartCount'] = Cart::content()->count();
  //     $data['cartTotal'] = ['total'=>Cart::subtotal()];
  //   } else {
  //     $data = [];
  //   }
  //   return Response::json($data);
  // }

  public function addToCart(Request $request){
    $id = $request->get('id');
    $name = $request->get('name');
    $qty = $request->get('qty');
    $price = $request->get('price');
    Cart::add($id, $name, $qty, $price);
    return Response::json(['success'=>true,'message'=>'One item successfully added to cart.']);
  }

  public function cartContents(){
    if(Cart::content()->count()>0){
      foreach(Cart::content() as $cart){
        Cart::setTax($cart->rowId, 0);
        $product = \App\Product::findOrFail($cart->id);
        if($product){
          $image = $product->image;
        } else {
          $image = '';
        }
        $data['cartContents'][] = ['rowId'=>$cart->rowId,'id'=>$cart->id,'name'=>$cart->name,'price'=> $cart->price, 'qty'=>$cart->qty, 'total'=>$cart->total,'image'=>$image];
      }
      $data['cartCount'] = Cart::content()->count();
      $data['cartTotal'] = ['total'=>Cart::subtotal()];
    } else {
      $data = [];
    }
    return Response::json($data);
  }

  public function cartTotal(){
    return Response::json(['total'=>Cart::subtotal()]);
  }

  public static function total(){
    if(Cart::content()->count()>0){
      foreach(Cart::content() as $cart){
        Cart::setTax($cart->rowId, 0);
        return Cart::subtotal();
      }
    }
    return 0;
  }

  public function deleteCartItem(Request $request){
    $id = $request->get('rowId');
    Cart::remove($id);
    return Response::json(['success'=>true, 'message'=>'One cart item deleted.']);
  }

  public function manageItems(Request $request){
    $rowId = $request->get('rowId');
    $method = $request->get('action');
    $content = Cart::get($rowId);
    if($content){
      if($method=='add'){
        $qty = $content->qty + 1;
        Cart::update($rowId, $qty);
      } else {
        $qty = $content->qty - 1;
        if($qty<1){
          Cart::remove($rowId);
        } else {
          Cart::update($rowId, $qty);
        }
      }
    }
    return $this->cartContents();
    // return Response::json(['success'=>true]);
  }

}
