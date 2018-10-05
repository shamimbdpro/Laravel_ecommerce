@extends('layouts.frontend')
@section('contents')

	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Check out</li>
				</ol>
			</div><!--/breadcrums-->

			<div class="step-one">
				<h2 class="heading">Step1</h2>
			</div>
			<div class="checkout-options">
				<h3>New User</h3>
				<p>Checkout options</p>
				<ul class="nav">
					<li>
						<label><input type="checkbox"> Register Account</label>
					</li>
					<li>
						<label><input type="checkbox"> Guest Checkout</label>
					</li>
					<li>
						<a href=""><i class="fa fa-times"></i>Cancel</a>
					</li>
				</ul>
			</div><!--/checkout-options-->

			<div class="register-req">
				<p>Please use Register And Checkout to easily get access to your order history, or use Checkout as Guest</p>
			</div><!--/register-req-->
        <form action="{{route('shiping')}}" method="post">
        	@csrf
			<div class="shopper-informations">
				<div class="row">
				
					<div class="col-sm-8 clearfix">
						<div class="bill-to">
							<p>Billing Infomation</p>
							<div class="form-one  class="form-group"" >
								
									<input class="form-control" type="text" placeholder="Name" name=shiping_name>
									<input class="form-control" type="text" placeholder="Email*" name="shiping_email">
										@if($errors->has('shiping_email'))
                                     	<p style="color: #e11f1f;font-size:12px" class="help-block"> {{$errors->first('shiping_email')}}</p>
                                       @endif
									<input class="form-control" type="text" placeholder="Phone *" name="shiping_phone">
										@if($errors->has('shiping_email'))
                                     	<p style="color: #e11f1f;font-size:12px" class="help-block"> {{$errors->first('shiping_email')}}</p>
                                       @endif
									<input class="form-control" type="text" placeholder="Address 1 *" name="shiping_address1">
									<input class="form-control" type="text" placeholder="Address 2" name="shiping_address2">
										@if($errors->has('shiping_address2'))
                                     	<p style="color: #e11f1f;font-size:12px" class="help-block"> {{$errors->first('shiping_address2')}}</p>
                                       @endif
							
							</div>
							<div class="form-two">
								
									<input class="form-control" type="text" placeholder="Zip / Postal Code *" name="shiping_post">
								    <input class="form-control" type="text" placeholder="Country" name="shiping_country">
								    <input class="form-control" type="text" placeholder="City" name="shiping_city">
									
								
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="order-message">
							<p>Shipping Order</p>
							<textarea name="message"  placeholder="Notes about your order, Special Notes for Delivery" rows="16"></textarea>
							<label><input type="checkbox"> Shipping to bill address</label>
						</div>	
					</div>					
				</div>
			</div>
			
		<div class="checkoutbtn" style="text-align: center;">
		  <button type="submit" class="btn btn-default get">Processed Checkout</button>
		</div>
	</form>

	</section> <!--/#cart_items-->
@endsection