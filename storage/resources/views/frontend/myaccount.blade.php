@extends('layouts.frontend')
@section('contents')
<div class="container">
	 <div style="text-align: center;margin-bottom: 50px">
	 	<img src="https://via.placeholder.com/1140x150">
	 </div>
	<ul class="nav nav-tabs" role="tablist">
	  <li class="nav-item">
	    <a class="nav-link active" href="#profile" role="tab" data-toggle="tab">Profile</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="#buzz" role="tab" data-toggle="tab">Order</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="#references" role="tab" data-toggle="tab">Whishlist</a>
	  </li>
	</ul>

	<!-- Tab panes -->
	<div class="tab-content">
	  <div role="tabpanel" class="tab-pane fade in active" id="profile">...</div>
	  <div role="tabpanel" class="tab-pane fade" id="buzz">bbb</div>
	  <div role="tabpanel" class="tab-pane fade" id="references">ccc</div>
	</div>
</div>
  @endsection