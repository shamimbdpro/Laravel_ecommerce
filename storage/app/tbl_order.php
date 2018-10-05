<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_order extends Model
{
	protected $primarykey='order_id';
   public function customerName(){
   	 	 return $this->belongsTo('App\customerRegister','customer_id','customerId');
   }

   public function paymentName(){
   	    return $this->belongsTo('App\tbl_payment','payment_id','payent_id');
   }

    public function orderDetails(){
   	    return $this->belongsTo('App\tbl_order_details','order_id','order_id');
   } 

    public function shipping(){
   	    return $this->belongsTo('App\shiping','shiping_id','shiping_id');
   }

   


}
