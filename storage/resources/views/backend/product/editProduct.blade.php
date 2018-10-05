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
				<li>
					<i class="icon-edit"></i>
					<a href="#">Add Product</a>
				</li>
			</ul>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Update Product</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>

					<div class="box-content">
					
						<form class="form-horizontal" action="{{route('updateProduct',$products->product_id)}}" method="post" enctype="multipart/form-data">
							@csrf
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Product Name <span class="req"> *</span></label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="typeahead" name="product_name" value="{{$products->product_name}}">

								 @if($errors->has('product_name'))
                                     	<p class="help-block"> {{$errors->first('product_name')}}</p>
                                @endif
							  </div>
							</div>

							<div class="control-group">
								<label class="control-label" for="selectError3">Product Category</label>
								<div class="controls">
								  <select id="selectError3" name="catagory_id">
								  	@foreach($catlist as $cat)
									<option value="{{$cat->cat_id}}">{{$cat->cat_name}}</option>
									@endforeach
								  </select>
								</div>
							  </div>


							  <div class="control-group">
								<label class="control-label" for="Menufacture">Menufacture</label>
								<div class="controls">
								  <select id="Menufacture" name="menufacture_id">
									@foreach($brand_list as $brand)
									<option value="{{$brand->menufr_id}}">{{$brand->menufr_name}}</option>
									@endforeach
								  </select>
								</div>
							  </div>

							         
							<div class="control-group hidden-phone">
							  <label class="control-label" for="pSmall_des">Product Short Description</label>
							  <div class="controls">
								<textarea class="cleditor" id="pSmall_des" rows="3" name="pSmall_des">{{$products->pSmall_des}}</textarea>
							  </div>
							</div>


							<div class="control-group hidden-phone">
							  <label class="control-label" for="plong_des">Product Long Description</label>
							  <div class="controls">
								<textarea class="cleditor" id="plong_des" rows="3" name="plong_des">{{$products->plong_des}}</textarea>
							  </div>
							</div>

	                        <div class="control-group">
							  <label class="control-label" for="product_price">Product Price<span class="req"> *</span></label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="product_price" name="product_price" value="{{$products->product_price}}">
								 @if($errors->has('product_price'))
                                     <p class="help-block">{{$errors->first('product_price')}}</p>
                                @endif
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="p_img">File input</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="p_img" name="p_img" type="file" value="{{$products->p_img}}">
								
							  </div>
							</div> 



	                        <div class="control-group">
							  <label class="control-label" for="product_size">Product Size</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="product_size" name="product_size" value="{{$products->product_size}}">
							  </div>
							</div>



  							 <div class="control-group">
							  <label class="control-label" for="product_color">Product Color</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="product_color" name="product_color" value="{{$products->product_color}}">
							  </div>
							</div>	


							  <div class="control-group">
								<label class="control-label" for="selectError3">Publish Status</label>
								<div class="controls">
								  <select id="selectError3" name="product_status">
									<option value="1">Publish</option>
									<option 
									  @if($products->product_status==0)
									selected="selected"
                                     @endif
									 value="0">Unpublish</option>
								  </select>
								</div>
							  </div>
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Update Product</button>
							</div>

						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->

	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
	
@endsection