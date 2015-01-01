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
<div id="cv-create" class="col-md-7 middle-wrapper">
	<form method="post" action="{{URL::route('candidate.cv.create.post')}}">
		<div>
			<div class="view-name title-bar">
				<strong>My Profile</strong>
			</div>
			<div class="box-body">
				<div class="inner-wrapper">
					<div class="row input-elements">
						<div class="col-sm-4 label-title">
							<label>Surname</label>
						</div>
						<div class="col-sm-8">
							<input type="text" class="form-control input-sm" id="surname"
								name="surname">
						</div>
						@if($errors->has())
							<div class="error">								
								{{$errors->first('surname', ':message')}}
							</div>
						@endif
					</div>
					<div class="row input-elements">
						<div class="col-sm-4 label-title">
							<label>Given name</label>
						</div>
						<div class="col-sm-8">
							<input type="text" class="form-control input-sm" id="name" name="name">
						</div>
					</div>
					<div class="row input-elements">
						<div class="col-sm-4 label-title">
							<label>Sex</label>
						</div>
						<div class="col-sm-8">
							<div class="radio input-element">
								<label><input type="radio" id="sex" name="sex" value="M">Male </label>&nbsp&nbsp
								<label><input type="radio" id="sex" name="sex" value="F">Female</label>
							</div>
						</div>
					</div>
					<div class="row input-elements">
						<div class="col-sm-4 label-title">
							<label>Date Of Birth</label>
						</div>
						<div class="col-sm-8">
							<input type="date" class="form-control input-sm" id="date_of_birth"
								name="date_of_birth">
						</div>
					</div>
					<div class="row input-elements">
						<div class="col-sm-4 label-title">
							<label>Marital Status</label>
						</div>
						<div class="col-sm-8">
							<select class="form-control input-sm" id="marital_status"
								name="marital_status">
								<option value="">---Select---</option>
								<option value="0">Single</option>
								<option value="1">Marriage</option>
							</select>
						</div>
					</div>
					<div class="row input-elements">
						<div class="col-sm-4 label-title">
							<label>Nationality</label>
						</div>
						<div class="col-sm-8">
							<select class="form-control input-sm" id="nationality" name="nationality">
								<option value="">---Select---</option>
								@foreach(Country::getNationalities() as $nationality)
								<option value="{{$nationality->id}}">{{$nationality->nationality}}</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="row input-elements">
						<div class="col-sm-4 label-title">
							<label>Province / City</label>
						</div>
						<div class="col-sm-8">
							<select class="form-control input-sm" id="residence" name="residence">
								<option value="">---Select---</option>
								@foreach(Config::get('setup.industries') as $industry)
								<option value="{{$industry->id}}">{{$industry->name}}</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="row input-elements">
						<div class="col-sm-4 label-title">
							<label>Address</label>
						</div>
						<div class="col-sm-8">
							<textarea class="form-control input-sm" id="address" name="address"></textarea>
						</div>
					</div>
					<div class="row input-elements">
						<div class="col-sm-4 label-title">
							<label>Phone</label>
						</div>
						<div class="col-sm-8">
							<input type="text" class="form-control input-sm" id="phone_number"
								name="phone_number">
						</div>
					</div>
					<div class="row input-elements">
						<div class="col-sm-4 label-title">
							<label>Email</label>
						</div>
						<div class="col-sm-8">
							<input type="email" class="form-control input-sm" id="email" name="email">
						</div>
					</div>
				</div>			
			</div>
		</div>
		{{Form::token()}}
	</form>
</div>
<div class="col-md-3 right-side-bar">
	
</div>
@endsection