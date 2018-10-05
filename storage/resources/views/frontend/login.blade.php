@extends('layouts.frontend')
@section('contents')
	
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>

						<form action="{{route('customerLogin')}}" method="post" >
							@csrf
							<input type="email" placeholder="Email" name="customerEmail"/>
							@if($errors->has('customerEmail'))
                                     	<p style="color: #e11f1f;font-size:12px" class="help-block"> {{$errors->first('customerEmail')}}</p>
                            @endif
							<input type="passowrd" placeholder="Enter Password" name="customerPass"/>
							@if($errors->has('customerPass'))
                                     	<p style="color: #e11f1f;font-size:12px" class="help-block"> {{$errors->first('customerPass')}}</p>
                            @endif
							<span>
								<input type="checkbox" class="checkbox"> 
								Keep me signed in
							</span>
							<button type="submit" class="btn btn-default">Login</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						<form action="{{route('customerRegister')}}" method="post">
							@csrf
							<input type="text" placeholder="Name" name="customerName" value="{{old('customerName')}}" />
							 @if($errors->has('customerName'))
                                     	<p style="color: #e11f1f;font-size:12px" class="help-block"> {{$errors->first('customerName')}}</p>
                                @endif
							<input type="email" placeholder="Email Address" name="customerEmail" value="{{old('customerEmail')}}" />
							 @if($errors->has('customerEmail'))
                                     	<p style="color: #e11f1f;font-size:12px" class="help-block"> {{$errors->first('customerEmail')}}</p>
                                @endif
							<input type="password" placeholder="Password" name="customerPass" value="{{old('customerPass')}}" />

							 @if($errors->has('customerPass'))
                                     	<p style="color: #e11f1f;font-size:12px" class="help-block"> {{$errors->first('customerPass')}}</p>
                                @endif
							<button type="submit" class="btn btn-default">Signup</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
	@endsection