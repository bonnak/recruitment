@extends('layouts.default')

@section('login')

<div id="login-box">
	<div class="row">
		<div class="view-name title-bar">
			<strong>Registration</strong>
		</div>
	</div>
	<div class="row box-body">
		<div class="row">
			<div class="col-sm-6">	
				@if(Session::get('global'))
					<div class="alert alert-danger" style="text-align: center;">
						{{Session::get('global')}}
					</div>
				@endif
				<form action="{{URL::route('user.login.post')}}" method="post" class="form-horizontal">
					<div class="form-group">
					    <label for="login-username" class="col-sm-4 control-label">User name / Email</label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control input-sm" id="login-username" name="user_name" >
					      	@if($errors->has())
								<div class="error">								
									{{$errors->first('user_name', ':message')}}
								</div>
							@endif
					    </div>
					</div>
					<div class="form-group">
					    <label for="login-pwd" class="col-sm-4 control-label">Password</label>
					    <div class="col-sm-8">
					      <input type="password" class="form-control input-sm" id="login-pwd" name="password">
					      	@if($errors->has())
								<div class="error">								
									{{$errors->first('password', ':message')}}
								</div>
							@endif
					    </div>
					</div>
					<div class="form-group">
					    <div class="col-sm-offset-4 col-sm-12">
					      <div class="checkbox">
					        <label>
					          <input type="checkbox"> Remember me
					        </label>
					      </div>
					    </div>
					  </div>
					  <div class="form-group">
						  <div class="col-sm-offset-4 col-sm-12">
						  	<a href="">Forgot password?</a>
						  </div>
					  </div>
					 <div class="form-group">
					    <div class="col-sm-offset-4 col-sm-12">
					      <button type="submit" class="btn btn-default">Sign in</button>
					    </div>
					 </div>
					{{Form::token()}}
				</form>
			</div>
		<div class="col-sm-6">
			<div class="logo">
				<img alt="" src="{{asset('assets/images/company-logo.png')}}">
			</div>
			<div class="description">
				<h3>Welcome to Aitie Agency</h3>
				<p>
					The trusted agency that privide best quality services.
				</p>
			</div>
		</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<span>Not yet a member? <a href="{{URL::route('user.register')}}">Register a new account</a></span>
			</div>
		</div>
	</div>	
</div>
@endsection