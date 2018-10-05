@extends('layouts.backend')
@section('contents')
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
					<a href="#">Add Slider</a>
				</li>
			</ul>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Add Product</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>

					<div class="box-content">
						 @if (Session('slider'))
						    <p class="sucmsg">Product Inserted Suceesfully</p>
						@endif
						<form class="form-horizontal" action="{{route('insertslider')}}" method="post" enctype="multipart/form-data">
							@csrf
						  <fieldset>
					
                             <div class="control-group">
							  <label class="control-label" for="slidertitle">Slider Title</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="product_color" name="slidertitle" value="{{old('slidertitle')}}">
								     @if($errors->has('slidertitle'))
                                     	<p class="help-block"> {{$errors->first('slidertitle')}}</p>
                                @endif
							  </div>
							</div>	

							<div class="control-group">
							  <label class="control-label" for="Subtitle">Slider Subtitle</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="product_color" name="Subtitle" value="{{old('Subtitle')}}">
							  </div>
							</div>	

							<div class="control-group hidden-phone">
							  <label class="control-label" for="slider_p">Slider Description</label>
							  <div class="controls">
								<textarea class="cleditor" id="slider_p" rows="3" name="slider_p">{{old('slider_p')}}</textarea>
							  </div>
							</div>

	                    


	                        <div class="control-group">
							  <label class="control-label" for="slider_img">Slider Image</label>
							  <div class="controls">
								<input type="file" class="span6 typeahead" id="slider_img" name="slider_img" value="{{old('slider_img')}}">
						        @if($errors->has('slider_img'))
                                     	<p class="help-block"> {{$errors->first('slider_img')}}</p>
                                @endif
							  </div>
							</div>

							
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Add Slider</button>
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