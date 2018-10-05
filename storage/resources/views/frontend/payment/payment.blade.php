@extends('layouts.frontend')
@section('contents')

<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb" style="margin-bottom:40px">
				  <li><a href="#">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="image">Name</td>
							<td class="price">Price</td>
							<td class="description"></td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
					<?php
                    $contents=Cart::content();
                     ?>
                      @foreach($contents as $content1)
						<tr>
							<td class="cart_product">
								<a href=""><img height="60" src="{{asset('contents/uploads/product')}}/{{$content1->options->p_img}}" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="{{route('singleProduct',$content1->id)}}">{{$content1->name}}</a></h4>
								<p>Web ID: 1089772</p>
							</td>
							<td class="cart_price">
								<p>${{$content1->price}}</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<form action="{{route('update_cart',$content1->rowId)}}" method="post">
										@csrf
									<input style="width:80px" class="cart_quantity_input" type="number" name="qty" value="{{$content1->qty}}" autocomplete="off" size="2">
									<button type="submit" >update</button>
									</form>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">${{$content1->total}}</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="{{route('delete_cart',$content1->rowId)}}"><i class="fa fa-times"></i></a>
							</td>
						</tr>

					@endforeach
						
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

<form action="{{route('Place_order')}}" method="post">
	@csrf
<div class="container">
	<div class="row justify-content-center">
		<div class="col-6">
			<div class="selectPayment ">
				
			  	<input type="radio" name="emotion" 
			  id="sad" class="input-hidden" value="Bikash" required/>
			<label for="sad">
			  <img 
			    src="{{asset('contents/frontend')}}/images/payment/bkash.jpg" 
			    alt="" />
			</label>

			<input 
			  type="radio" name="emotion"
			  id="happy" class="input-hidden" value="DBBL" required/>
			<label for="happy">
			  <img 
			     src="{{asset('contents/frontend')}}/images/payment/1200px-DBBL.jpg" 
			    alt="" />
			</label>
			  

			  <input 
			  type="radio" name="emotion"
			  id="happy2" class="input-hidden" value="handcash" required/>
			<label for="happy2">
			  <img 
			     src="{{asset('contents/frontend')}}/images/payment/handcash.jpg" 
			    alt="" />
			</label>
			  <input 
			  type="radio" name="emotion"
			  id="happy23" class="input-hidden" value="Paypal" required/>
			<label for="happy23">
			  <img 
			     src="{{asset('contents/frontend')}}/images/payment/paypal.png" 
			    alt="" />
			</label>
			  </div>
			
		  </div>
    </div>
</div>

 <div class="checkoutbtn" style="text-align: center;">
		  <button type="submit" class="btn btn-default get">Place Order</button>
		</div>
</form>





  <style type="text/css"> 
 .input-hidden {
  position: absolute;
  left: -9999px;
}

input[type=radio]:checked + label>img {
  border: 1px solid #fff;
  box-shadow: 0 0 3px 3px #090;
 
}

/* Stuff after this is only to make things more pretty */
input[type=radio] + label>img {
  border: 1px dashed #444;
  width: 100px;
  height: 80px;
  transition: 500ms all;
  margin-right: 20px;
   cursor: pointer
}




</style>





















@endsection