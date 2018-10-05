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
				<li><a href="#">Product</a></li>
			</ul>

			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
				@if (session('order'))
				    <div class="alert alert-success" style="font-weight: 900">
				        {{ session('order') }}
				    </div>
				@endif
				 
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Order Id</th>
								  <th>Cutomer name</th>
								  <th>Order Price</th>
								   <th>Pyment Method</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
						  	     <?php $x=0 ?>
						  	@foreach($orders as $order)
						  	   <?php $x++; ?>
							<tr>
								<td>{{$x}}</td>
								<td class="center">{{$order->customerName->customerName}}</td>
								<td class="center">${{$order->order_total}}</td>
								<td class="center product1">
								   {{$order->paymentName->payent_method}}
								</td>
								 <td class="center text-center">
								   @if($order->order_status==1)
									<a style="width:70px" href="#" class="btn btn-small btn-success ">Active</a>
									@else
									<a style="width:70px" href="#" class="btn btn-small btn-inverse">panding</a>
									@endif
								</td>

								<td class="center">
									<a class="btn btn-primary" href="#">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-primary" href="{{route('vieworder',$order->order_id)}}">
										<i class="halflings-icon white zoom-in"></i>  
									</a>
									<a class="btn btn-danger" href="{{route('delete_order',$order->order_id)}}">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr>
							@endforeach

							
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->

			
	
	<div class="clearfix"></div>
@endsection