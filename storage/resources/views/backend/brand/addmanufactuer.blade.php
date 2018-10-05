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
					<a href="#">Add Manufacture</a>
				</li>
			</ul>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Add Category</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
                      
					<div class="box-content">
						  @if (Session('status'))
						    <p class="sucmsg">Brand Added Suceesfully</p>
						@endif
						 <form action="{{route('insertmanufacture')}}" method="post"  class="form-horizontal">
                         @csrf
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Brnad Name</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="typeahead" name="menufr_name">

                             @if($errors->has('menufr_name'))
                               <span class='help-block'>
                                      {{$errors->first('menufr_name')}}
                               </span>
                             @endif


							  </div>
							</div>
						
       
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Brand Description</label>
							  <div class="controls">
								<textarea class="cleditor" id="textarea2" rows="3" name="menufr_des"></textarea >

							  @if($errors->has('menufr_des'))
                               <span class='help-block'>
                                     {{$errors->first('menufr_des')}}
                               </span>
                               @endif

							  </div>
							</div>

						  <div class="control-group">
								<label class="control-label" for="selectError3">Publish Status</label>
								<div class="controls">
								  <select id="selectError3" name="menufr_status">
									<option value="1">Publish</option>
									<option value="0">Unpublish</option>
								  </select>
								</div>
							  </div>
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Add Brand</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->

		
		

			</div><!--/row-->
    

	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>
	
	@endsection