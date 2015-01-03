@extends('layouts.default') 

@section('candidate')
<div class="col-md-2 left-side-bar">
	<div>
		@foreach(Config::get('setup.candidate.menu') as $menu => $url)
			<ul class="list-unstyled">
			@if(is_array($url))
				<li><h3 class="title">{{$menu}}</h3>
					<ul class="list-unstyled">
					@foreach($url as $menu => $url)
						<li><a href="{{$url}}">{{$menu}}</a><hr class="menu-seperator"></li>
					@endforeach
					</ul>
				</li>
			@else
				<li><h3 class="title"><a href="{{$url}}">{{$menu}}</a></h3></li>
			@endif
			</ul>
		@endforeach
	</div>
</div>
<div id="profile" class="col-md-7 middle-wrapper">
	<div class="show-profile">
		<div class="box">
			<div class="row">
				<div class="view-name title-bar">
					<strong>Account</strong>
				</div>
			</div>
			<div class="row box-body">
				<div class="form-horizontal">
					<div class="form-group">
					    <label for="" class="col-sm-4 control-label">User name</label>
					    <div class="col-sm-5">
					      <span class="data"><strong>{{Auth::user()->user_name}}</strong></span>						
						</div>
					</div>
					<div class="form-group">
					    <label for="" class="col-sm-4 control-label">Email</label>
					    <div class="col-sm-5">
					      <span class="data"><strong>{{Auth::user()->email}}</strong></span>						
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="box">
			<div class="row">
				<div class="view-name title-bar">
					<strong>My Profile</strong>
				</div>
			</div>
			<div class="row box-body">
			<form method="post" action="{{URL::route('candidate.cv.profile.post')}}" class="form-horizontal">
				<div class="form-group">
				    <label for="surname" class="col-sm-4 control-label">Surname</label>
				    <div class="col-sm-5">
				      <span class="data"><strong>{{$candidate->surname}}</strong></span>			      							
					</div>
				</div>
				<div class="form-group">
				    <label for="name" class="col-sm-4 control-label">Given name</label>
				    <div class="col-sm-5">
				      <span class="data"><strong>{{$candidate->name}}</strong></span>					
					</div>
				</div>
				<div class="form-group">
				    <label for="surname" class="col-sm-4 control-label">Sex</label>
				    <div class="col-sm-5">
				      <span class="data"><strong>{{$candidate->sex}}</strong></span>							
					</div>
				</div>
				<div class="form-group">
				    <label for="date_of_birth" class="col-sm-4 control-label">Date Of Birth</label>
				    <div class="col-sm-5">
				       <span class="data"><strong>{{\Carbon\Carbon::createFromFormat('Y-m-d', $candidate->date_of_birth)->format('Y-F-d')}}</strong></span>					
					</div>
				</div>
				<div class="form-group">
				    <label for="marital_status" class="col-sm-4 control-label">Marital Status</label>
				    <div class="col-sm-5">
					     <span class="data"><strong>{{$candidate->marital_status}}</strong></span>							
					</div>
				</div>
				<div class="form-group">
				    <label for="nationality" class="col-sm-4 control-label">Nationality</label>
				    <div class="col-sm-5">
				        <span class="data"><strong>{{$candidate->nationality}}</strong></span>						
					</div>
				</div>		
				<div class="form-group">
				    <label for="residence" class="col-sm-4 control-label">Province / City</label>
				    <div class="col-sm-5">
				        <span class="data"><strong>{{$candidate->residence}}</strong></span>							
					</div>
				</div>	
				<div class="form-group">
				    <label for="address" class="col-sm-4 control-label">Address</label>
				    <div class="col-sm-5">
				    	<span class="data"><strong>{{$candidate->address}}</strong></span>							
					</div>
				</div>
				<div class="form-group">
				    <label for="phone_number" class="col-sm-4 control-label">Phone</label>
				    <div class="col-sm-5">
				    	<span class="data"><strong>{{$candidate->phone_number}}</strong></span>
				    </div>
				</div>
				<!-- <div class="form-group profile-pic" style="position: absolute; width: 116px; top: 18px; left: 500px;">
					<img src="{{asset('assets/images/no-profile-pic.jpg')}}" alt="..." class="img-thumbnail">
					<div class="hide" style="position: absolute; top: 0; left: 100%;">
						<a href="" style="display: block; padding: 5px; text-align: center;"><i class="glyphicon glyphicon-pencil"></i></a>
						<hr style="margin: 0; opacity: .2;">
						<a href="" style="display: block; padding: 5px; text-align: center;"><i class="glyphicon glyphicon-trash"></i></a>
					</div>				
				</div>		 -->		
				<div class="box-footer">
					<button type="button" class="btn btn-default" style="width: 100px;">Edit</button>
				</div>
				{{Form::token()}}
			</form>
			</div>
		</div>
	</div>
	<div class="edit-profile hide">
		@if(Session::get('profile'))
			<div id="alert" class="alert alert-success" style="text-align: center;">
				{{Session::get('profile')}}
			</div>		
			<script type="text/javascript">
				setTimeout(function(){
					$('#alert').css({
						'opacity': 0, 
						'transition': 'all 1s ease-in'
					});
				}, 3000);
				setTimeout(function(){
					$('#alert').remove();
				}, 4000);
			</script>
		@endif
		<div class="box">
			<div class="row">
				<div class="view-name title-bar">
					<strong>Account</strong>
				</div>
			</div>
			<div class="row box-body">
				<div class="form-horizontal">
					<div class="form-group">
					    <label for="" class="col-sm-4 control-label">User name</label>
					    <div class="col-sm-5">
					      <span class="data"><strong>{{Auth::user()->user_name}}</strong></span>						
						</div>
					</div>
					<div class="form-group">
					    <label for="" class="col-sm-4 control-label">Email</label>
					    <div class="col-sm-5">
					      <span class="data"><strong>{{Auth::user()->email}}</strong></span>						
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="box">
			<div class="row">
				<div class="view-name title-bar">
					<strong>My Profile</strong>
				</div>
			</div>
			<div class="row box-body">
			<form method="post" action="{{URL::route('candidate.cv.profile.post')}}" class="form-horizontal">
				<div class="form-group">
				    <label for="surname" class="col-sm-4 control-label">Surname</label>
				    <div class="col-sm-5">
				      <input type="text" class="form-control" id="surname" name="surname" value="{{Input::old('surname')}}">			      							
					</div>
					<div class="col-sm-3" style="padding:0;">
						@if($errors->has())
							<div class="error">								
								{{$errors->first('surname', ':message')}}
							</div>
						@endif
					</div>
				</div>
				<div class="form-group">
				    <label for="name" class="col-sm-4 control-label">Given name</label>
				    <div class="col-sm-5">
				      <input type="text" class="form-control" id="name" name="name" value="{{Input::old('name')}}">						
					</div>
					<div class="col-sm-3" style="padding:0;">
						@if($errors->has())
							<div class="error">								
								{{$errors->first('name', ':message')}}
							</div>
						@endif
					</div>
				</div>
				<div class="form-group">
				    <label for="surname" class="col-sm-4 control-label">Sex</label>
				    <div class="col-sm-5">
				      <div class="radio">
					  		<label><input type="radio" id="sex" name="sex" value="M" {{Input::old('sex') == 'M' ? 'checked' : ''}}>Male </label>&nbsp&nbsp
							<label><input type="radio" id="sex" name="sex" value="F"{{Input::old('sex') == 'F' ? 'checked' : ''}}>Female</label>
					  </div>							
					</div>
					<div class="col-sm-3" style="padding:0;">
						@if($errors->has())
							<div class="error">								
								{{$errors->first('sex', ':message')}}
							</div>
						@endif
					</div>
				</div>
				<div class="form-group">
				    <label for="date_of_birth" class="col-sm-4 control-label">Date Of Birth</label>
				    <div class="col-sm-5">
				      <input type="date" class="form-control input-sm" id="date_of_birth" name="date_of_birth" value="{{Input::old('date_of_birth')}}">
				    						
					</div>
					<div class="col-sm-3" style="padding:0;">
						@if($errors->has())
							<div class="error">								
								{{$errors->first('date_of_birth', ':message')}}
							</div>
						@endif
					</div>
				</div>
				<div class="form-group">
				    <label for="marital_status" class="col-sm-4 control-label">Marital Status</label>
				    <div class="col-sm-5">
				      <select class="form-control input-sm" id="marital_status" name="marital_status">
							<option value="">---Select---</option>
							<option value="1" {{Input::old('marital_status') == 1 ? 'selected' : ''}}>Single</option>
							<option value="2" {{Input::old('marital_status') == 2 ? 'selected' : ''}}>Marriage</option>
						</select>							
					</div>
					<div class="col-sm-3" style="padding:0;">
						@if($errors->has())
							<div class="error">								
								{{$errors->first('marital_status', ':message')}}
							</div>
						@endif
					</div>
				</div>
				<div class="form-group">
				    <label for="nationality" class="col-sm-4 control-label">Nationality</label>
				    <div class="col-sm-5">
				      <select class="form-control input-sm" id="nationality" name="nationality">
							<option value="">---Select---</option>
							@foreach(Country::getNationalities() as $nationality)
							<option value="{{$nationality->id}}" {{Input::old('nationality') == $nationality->id ? 'selected' : ''}}>{{$nationality->nationality}}</option>
							@endforeach
						</select>						
					</div>
					<div class="col-sm-3" style="padding:0;">
						@if($errors->has())
							<div class="error">								
								{{$errors->first('nationality', ':message')}}
							</div>
						@endif
					</div>
				</div>		
				<div class="form-group">
				    <label for="residence" class="col-sm-4 control-label">Province / City</label>
				    <div class="col-sm-5">
				      <select class="form-control input-sm" id="residence" name="residence">
							<option value="">---Select---</option>
							@foreach(Location::getProvinces_Cities() as $location)
							<option value="{{$location->id}}" {{Input::old('residence') == $location->id ? 'selected' : ''}}>{{$location->name}}</option>
							@endforeach
						</select>							
					</div>
					<div class="col-sm-3" style="padding:0;">
						@if($errors->has())
							<div class="error">								
								{{$errors->first('residence', ':message')}}
							</div>
						@endif
					</div>
				</div>	
				<div class="form-group">
				    <label for="address" class="col-sm-4 control-label">Address</label>
				    <div class="col-sm-5">
				     <textarea class="form-control input-sm" id="address" name="address">{{Input::old('address')}}</textarea>							
					</div>
					<div class="col-sm-3" style="padding:0;">
						@if($errors->has())
							<div class="error">								
								{{$errors->first('address', ':message')}}
							</div>
						@endif
					</div>
				</div>
				<div class="form-group">
				    <label for="phone_number" class="col-sm-4 control-label">Phone</label>
				    <div class="col-sm-5">
				     <input type="text" class="form-control input-sm" id="phone_number" name="phone_number" value="{{Input::old('phone_number')}}">
				    </div>
					<div class="col-sm-3" style="padding:0;">
						@if($errors->has())
							<div class="error">								
								{{$errors->first('phone_number', ':message')}}
							</div>
						@endif
					</div>
				</div>
				<!-- <div class="form-group profile-pic" style="position: absolute; width: 116px; top: 18px; left: 500px;">
					<img src="{{asset('assets/images/no-profile-pic.jpg')}}" alt="..." class="img-thumbnail">
					<div class="hide" style="position: absolute; top: 0; left: 100%;">
						<a href="" style="display: block; padding: 5px; text-align: center;"><i class="glyphicon glyphicon-pencil"></i></a>
						<hr style="margin: 0; opacity: .2;">
						<a href="" style="display: block; padding: 5px; text-align: center;"><i class="glyphicon glyphicon-trash"></i></a>
					</div>				
				</div>		 -->		
				<div class="box-footer">
					<button type="submit" class="btn btn-default" style="width: 100px;"><i class="fa fa-floppy-o"></i> Save</button>
				</div>
				{{Form::token()}}
			</form>
			</div>
		</div>
	</div>
</div>
<div class="col-md-3 right-side-bar">
	
</div>
@endsection