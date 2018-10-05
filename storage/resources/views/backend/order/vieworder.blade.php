@extends('layouts.backend')
@section('contents')
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<!-- start: Content -->
			<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">View Order</a></li>
			</ul>




<div class="row-fluid sortable ui-sortable">
				<div class="box span6">
					<div class="box-header">
						<h2><i class="halflings-icon align-justify"></i><span class="break"></span>Customer Information</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table">
							  <thead>
								  <tr>
									  <th>Customer ID</th>
									  <th>Customer Name</th>
									  <th>Customer Email</th>                                      
								  </tr>
							  </thead>   
							  <tbody>
								<tr>

									<td>{{$vieworders->customerName->customerId}}</td>
									<td>{{$vieworders->customerName->customerName}}</td>
									<td>{{$vieworders->customerName->customerEmail}}</td>
									                                   
								</tr>
							                                 
							  </tbody>
						 </table>     
					</div>
				</div><!--/span-->
				
				<div class="box span6">
					<div class="box-header">
						<h2><i class="halflings-icon align-justify"></i><span class="break"></span>Order Details</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped">
							  <thead>
								  <tr>
									  <th>Product Name</th>
									  <th>product Price</th>
									  <th>Product Quantiti</th>                               
									  <th>Payment Method</th>                               
								  </tr>
							  </thead>   
							  <tbody>
								<tr>
						        <td>{{$vieworders->orderDetails->product_name}}</td>
								<td>{{$vieworders->orderDetails->product_price}}</td>
								<td>{{$vieworders->orderDetails->product_qty}}</td>
								<td>{{$vieworders->paymentName->payent_method}}</td>
								</tr> 

								<tr>
									<td><strong>Toata</strong></td>
									<td>${{$vieworders->order_total}}</td>
								</tr>                        
							  </tbody>
						 </table>  
					    
					</div>
				</div><!--/span-->

		
				<div class="box span12">
					<div class="box-header">
						<h2><i class="halflings-icon align-justify"></i><span class="break"></span>Shipping  Details</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped">
							  <thead>
								  <tr>
									  <th>Shipping Name</th>
									  <th>Shipping Email</th>
									  <th>Phone</th>
									  <th>Address 1</th>                                          
									  <th>Address 2</th>                                          
									  <th>Shipping Country</th>               
									  <th>Shipping City</th>                                          
								  </tr>
							  </thead>   
							  <tbody>
								<tr>
									<td>{{$vieworders->shipping->shiping_name}}</td>
									<td>{{$vieworders->shipping->shiping_email}}</td>
									<td>{{$vieworders->shipping->shiping_phone}}</td>
									<td>{{$vieworders->shipping->shiping_post}}</td>
									<td>{{$vieworders->shipping-> shiping_city }}</td> 
								                                      
								</tr>
								<tr>
								                                  
							  </tbody>
						 </table>  
					    
					</div>
				</div><!--/span-->










			</div>









			
	
	<div class="clearfix"></div>
@endsection