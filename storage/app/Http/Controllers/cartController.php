<?php

namespace App\Http\Controllers;
use App\product;
use App\category;
use App\manufacture;
use Session;
use Cart;
use Carbon\Carbon;
use Illuminate\Http\Request;

class cartController extends Controller
{
    public function index(Request $request,$id){
        $product_quantity=$request->qty;
    	$cartinfo =product::where('product_id',$id)->first();
         
        $data['qty']=$product_quantity;
         $data['id']=$cartinfo->product_id;
         $data['name']=$cartinfo->product_name;
         $data['price']=$cartinfo->product_price;
         $data['options']['p_img']=$cartinfo->p_img;

        Cart::add($data);
        return redirect(route('cart'));

    }

public function show_cart(){
  	return view('frontend.cart');
  }

public function update_cart($rowId){
   $qty=$_POST['qty'];
    Cart::update($rowId,$qty);
    return redirect(route('cart'));

}

 public function delete_cart($id){
    Cart::update($id,0);
    return redirect(route('cart'));
 }

  }
