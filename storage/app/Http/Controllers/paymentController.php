<?php

namespace App\Http\Controllers;
use App\product;
use App\category;
use App\manufacture;
use App\tbl_order;
use App\tbl_order_details;
use App\tbl_payment;
use Session;
use Cart;
use Carbon\Carbon;
use Illuminate\Http\Request;

class paymentController extends Controller
{
    public function Payment(){
    	return view('frontend.payment.payment');
    }
    public function Place_order(){
      $payment_getway=$_POST['emotion'];

     //Payment Insert
       $payment_id=tbl_payment::insertGetId([
         'payent_method' => $_POST['emotion'],
         'payent_status' =>'pending',
         'Created_at' => Carbon::now()->toDateTimeString(),
      ]);

     // order insert
     $orderId=tbl_order::insertGetId([
         'customer_id' => Session::get('customerId'),
         'shiping_id' => Session::get('shipingId'),
         'payment_id' => $payment_id,
         'order_total' => Cart::total(),
         'order_status' => 'pending',
         'Created_at' => Carbon::now()->toDateTimeString(),
      ]);


     // order details insert
     $cart_contents=cart::content();
     foreach ($cart_contents as $cart_content) {
       $order_details=tbl_order_details::insert([
         'order_id' =>$orderId,
         'product_id' => $cart_content->id,
         'product_name' => $cart_content->name,
         'product_price' => $cart_content->price,
         'product_qty' => $cart_content->qty,
         'Created_at' => Carbon::now()->toDateTimeString(),
      ]);
     }
     if($payment_getway=='handcash'){
     	 Cart::destroy();
     	 return redirect('Thankyou');

     	}elseif($payment_getway=='Bikash'){
           echo "we allow only handcash";

     	}elseif($payment_getway=='DBBL'){
           echo "we allow only handcash";
     	}elseif($payment_getway=='Paypal'){
           echo "we allow only handcash";
     	}else{
     		echo "no selected";
     	}
     


    }


   public function order(){
     $orders =tbl_order::all();
      return view('backend.order.allorder',compact('orders'));
   }

    public function vieworder($id){
    $vieworders=tbl_order::where('order_id',$id)->firstOrFail();
     return view('backend.order.vieworder',compact('vieworders'));
   }

    public function delete_order($id){
     $delete_order=tbl_order::where('order_id',$id)->delete();
      if($delete_order){
        return redirect(route('order'))->with('order','Order Deleted Sucessfuly');
      }
    }




    public function Thankyou(){

    	return view('frontend.Thanks');
    }
}
