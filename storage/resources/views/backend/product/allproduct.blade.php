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
					 @if (Session('deleteslider'))
						    <p class="sucmsg">Slider Deleted Suceesfully</p>
					@endif
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Product Id</th>
								  <th>Product name</th>
								  <th>Product Price</th>
								   <th>Product Photo</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
						  	     <?php $x=0 ?>
						  	@foreach($products as $product)
						  	   <?php $x++; ?>
							<tr>
								<td>{{$x}}</td>
								<td class="center">{{$product->product_name}}</td>
								<td class="center">${{$product->product_price}}</td>
								<td class="center product1">
								 <img src="{{asset('contents/uploads/product')}}/{{$product->p_img}}" alt="Image">
								</td>
								 <td class="center text-center">
								   @if($product->product_status==1)
									<a style="width:70px" href="#" class="btn btn-small btn-success ">Active</a>
									@else
									<a style="width:70px" href="#" class="btn btn-small btn-inverse">Deactive</a>
									@endif
								</td>

								<td class="center">
									<a class="btn btn-primary" href="{{route('editProduct',$product->product_id)}}">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" href="{{route('deleteProduct',$product->product_id)}}">
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