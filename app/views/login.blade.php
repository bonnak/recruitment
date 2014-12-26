@extends('layouts.default')

@section('login')

<div id="login-box">
	<div class="row">
		<div class="view-name title-bar">
			<strong>Member Login</strong>
		</div>
	</div>
	<div class="row box-body">	
		<div class="col-sm-6">
			<form action="{{URL::route('user.login.post')}}" method="post" class="form-horizontal">
				<div class="form-group">
				    <label for="login-username" class="col-sm-4 control-label">User name / Email</label>
				    <div class="col-sm-8">
				      <input type="text" class="form-control input-sm" id="login-username" name="user_name" >
				    </div>
				</div>
				<div class="form-group">
				    <label for="login-pwd" class="col-sm-4 control-label">Password</label>
				    <div class="col-sm-8">
				      <input type="password" class="form-control input-sm" id="login-pwd" name="password">
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
				<h2>Welcome to Aitie Agency</h2>
				<p>
					Buy and Sell all types of vehicles on MotorBB, The smart Auto Trader's Network!
				</p>
			</div>
		</div>
	</div>	
</div>
@endsection