@extends('layouts.default') @section('candidate')
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
				<strong>CV</strong>
				<a href="javascript:onclick" class="btn-min-max glyphicon glyphicon-chevron-up" style="color: #fff; float: right; text-decoration: none;"></a>
			</div>
			<div class="box-body">
				<div class="inner-wrapper">
					<div class="row input-elements">
						<div class="col-sm-4 label-title">
							<label>CV title</label>
						</div>
						<div class="col-sm-8">
							<input type="text" class="form-control input-sm" id="cv-name"
								name="cv-name">
						</div>
					</div>
					<div class="row input-elements" style="display: flex; align-items: baseline;">
						<div class="col-sm-4 label-title">
							<label>Who can see your CV</label>
						</div>
						<div class="col-sm-8">
							<div class="radio input-element">
								<label><input type="radio" id="cv-privacy" name="cv-privacy" value="0">Everyone</label>&nbsp;&nbsp;&nbsp;
								<label><input type="radio" id="cv-privacy" name="cv-privacy" value="1">Only you</label>
							</div>
						</div>
					</div>					
				</div>
			</div>
		</div>
		<div class="box">
			<div class="view-name title-bar">
				<strong>Basic Information</strong>
				<a href="javascript:onclick" class="btn-min-max glyphicon glyphicon-chevron-up" style="color: #fff; float: right; text-decoration: none;"></a>
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
								<option value="0">Cambodian</option>
								<option value="1">Thai</option>
								<option value="2">Vietnamese</option>
								<option value="3">Japanese</option>
								<option value="4">Korea</option>
								<option value="5">American</option>
							</select>
						</div>
					</div>
					<div class="row input-elements">
						<div class="col-sm-4 label-title">
							<label>Residence</label>
						</div>
						<div class="col-sm-8">
							<select class="form-control input-sm" id="residence" name="residence">
								<option value="">---Select---</option>
								<option value="0">Phnom Penh</option>
								<option value="1">Kandal</option>
								<option value="2">Prey Veng</option>
								<option value="3">Kampong Chhnang</option>
								<option value="4">Kampong Cham</option>
								<option value="5">Kampot</option>
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
		<div class="box">
			<div class="view-name title-bar">
				<strong>Education Background</strong>
				<a href="javascript:onclick" class="btn-min-max glyphicon glyphicon-chevron-up" style="color: #fff; float: right; text-decoration: none;"></a>
			</div>
			<div class="box-body">
			<div class="inner-wrapper">
				<div class="row input-elements">
						<div class="col-sm-4 label-title">
							<label>Institute</label>
						</div>
						<div class="col-sm-8">
							<input type="text" class="form-control input-sm" id="institute"
								name="institute">
						</div>
					</div>
					<div class="row input-elements">
						<div class="col-sm-4 label-title">
							<label>Major</label>
						</div>
						<div class="col-sm-8">
							<input type="text" class="form-control input-sm" id="major" name="major">
						</div>
					</div>
					<div class="row input-elements">
						<div class="col-sm-4 label-title">
							<label>Degree</label>
						</div>
						<div class="col-sm-8">
							<select class="form-control input-sm" id="degree" name="degree">
								<option value="">--Select--</option>
								<option value="">Bachelor</option>
								<option value="">Master</option>
								<option value="">PhD</option>
							</select>
						</div>
					</div>
					<div class="row input-elements">
						<div class="col-sm-4 label-title">
							<label>Situation</label>
						</div>
						<div class="col-sm-8">
							<select class="form-control input-sm" id="situation" name="situation">
								<option value="">--Select--</option>
								<option value="">Leave</option>
								<option value="">Studying</option>
								<option value="">Finish</option>
							</select>
						</div>
					</div>
					<div class="row input-elements">
						<div class="col-sm-4 label-title">
							<label>Graduation</label>
						</div>
						<div class="col-sm-8">
							<div class="form-inline">
								<select class="sl-year form-control input-sm"
									id="graduation-year" name="graduation-year">
									<option value=""></option>
									@foreach(Config::get('setup.years') as $year)
										<option>{{$year}}</option>
									@endforeach
								</select>&nbsp;<span>Year</span>
								&nbsp;&nbsp;&nbsp;
								<select
									class="sl-month form-control input-sm" id="graduation-month"
									name="graduation-month">
									<option value=""></option>
									@foreach(Config::get('setup.months') as $month)
										<option value="{{$month['num']}}">{{$month['name']}}</option>
									@endforeach
								</select>&nbsp;<span>Month</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="box">
			<div class="view-name title-bar">
				<strong>Work Experience</strong>
				<a href="javascript:onclick" class="btn-min-max glyphicon glyphicon-chevron-up" style="color: #fff; float: right; text-decoration: none;"></a>
			</div>
			<div class="box-body">
			<div class="inner-wrapper">
				<div class="row input-elements">
						<div class="col-sm-4 label-title">
							<label>Job title</label>
						</div>
						<div class="col-sm-8">
							<input type="text" class="form-control input-sm" id="job-title"
								name="job-title">
						</div>
					</div>
					<div class="row input-elements">
						<div class="col-sm-4 label-title">
							<label>Company</label>
						</div>
						<div class="col-sm-8">
							<input type="text" class="form-control input-sm" id="company"
								name="company">
						</div>
					</div>
					<div class="row input-elements">
						<div class="col-sm-4 label-title">
							<label>Industry</label>
						</div>
						<div class="col-sm-8">
							<select class="form-control input-sm" id="ex-industry" name="ex-industry">
								<option value="">---Select---</option> 
								@foreach($industries as $industry)
								<option value="{{$industry->id}}">{{$industry->name}}</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="row input-elements">
						<div class="col-sm-4 label-title">
							<label>Location</label>
						</div>
						<div class="col-sm-8">
							<select class="sl-location form-control input-sm" id="ex-location" name="ex-location">
								@foreach($locations as $location)
								<option value="{{$location->id}}">{{$location->name}}</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="row input-elements">
						<div class="col-sm-4 label-title">
							<label>From</label>
						</div>
						<div class="col-sm-8">
							<div class="form-inline">
								<select class="sl-year form-control input-sm"
									id="graduation-year" name="graduation-year">
									<option value=""></option>
									@foreach(Config::get('setup.years') as $year)
										<option>{{$year}}</option>
									@endforeach
								</select>&nbsp;<span>Year</span>
								&nbsp;&nbsp;&nbsp;
								<select
									class="sl-month form-control input-sm" id="graduation-month"
									name="graduation-month">
									<option value=""></option>
									@foreach(Config::get('setup.months') as $month)
										<option value="{{$month['num']}}">{{$month['name']}}</option>
									@endforeach
								</select>&nbsp;<span>Month</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="box">
			<div class="view-name title-bar">
				<strong>Skills</strong>
				<a href="javascript:onclick" class="btn-min-max glyphicon glyphicon-chevron-up" style="color: #fff; float: right; text-decoration: none;"></a>
			</div>
			<div class="box-body">
				<div class="inner-wrapper">
					<div class="row input-elements">
						<div class="col-sm-4 label-title">
							<label>Skill</label>
						</div>
						<div class="col-sm-8">
							<input type="text" class="form-control input-sm" id="skill" name="skill">
						</div>
					</div>
					<div class="row input-elements">
						<div class="col-sm-4 label-title">
							<label>Year of experience</label>
						</div>
						<div class="col-sm-8">
							<input type="text" class="form-control input-sm" id="year-experience" name="year-experience" style="width: 54px;">
						</div>
					</div>
					<div class="row input-elements">
						<div class="col-sm-4 label-title">
							<label>Level</label>
						</div>
						<div class="col-sm-8">
							<select class="form-control input-sm" id="skill-level" name="skill-level" style="width: 115px;">
								<option value="">---Select---</option>
								<option value="0">Poor</option>
								<option value="1">Fair</option>
								<option value="2">Good</option>
								<option value="3">Very Good</option>
								<option value="4">Excellent</option>
							</select>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="box">
			<div class="view-name title-bar">
				<strong>Languages</strong>
				<a href="javascript:onclick" class="btn-min-max glyphicon glyphicon-chevron-up" style="color: #fff; float: right; text-decoration: none;"></a>
			</div>
			<div class="box-body">
				<div class="inner-wrapper">
					<div class="row input-elements">
						<div class="col-sm-4 label-title">
							<label>Language</label>
						</div>
						<div class="col-sm-8">
							<input type="text" class="form-control input-sm" id="language"
								name="language">
						</div>
					</div>
					<div class="row input-elements">
						<div class="col-sm-4 label-title">
							<label>Level</label>
						</div>
						<div class="col-sm-8">
							<select class="form-control input-sm" id="language-level"
								name="language-level" style="width: 115px;">
								<option value="">---Select---</option>
								<option value="0">Poor</option>
								<option value="1">Fair</option>
								<option value="2">Good</option>
								<option value="3">Very Good</option>
								<option value="4">Excellent</option>
							</select>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="box">
			<div class="view-name title-bar">
				<strong>Expectation</strong>
				<a href="javascript:onclick" class="btn-min-max glyphicon glyphicon-chevron-up" style="color: #fff; float: right; text-decoration: none;"></a>
			</div>
			<div class="box-body">
				<div class="inner-wrapper">
					<div class="row input-elements">
						<div class="col-sm-4 label-title">
							<label>Function</label>
						</div>
						<div class="col-sm-8">
							<select class="form-control input-sm" id="function" name="desired_function">
								<option value="">---Select---</option> @foreach($functions as
								$function)
								<option value="{{$function->id}}">{{$function->name}}</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="row input-elements">
						<div class="col-sm-4 label-title">
							<label>Industry</label>
						</div>
						<div class="col-sm-8">
							<select class="form-control input-sm" id="industry" name="desired_industry">
								<option value="">---Select---</option> @foreach($industries as
								$industry)
								<option value="{{$industry->id}}">{{$industry->name}}</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="row input-elements">
						<div class="col-sm-4 label-title">
							<label>Location</label>
						</div>
						<div class="col-sm-8">
							<select class="sl-location form-control input-sm" id="location" name="desired_location">
								<option value="">---Select---</option> @foreach($locations as
								$location)
								<option value="{{$location->id}}">{{$location->name}}</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="row input-elements">
						<div class="col-sm-4 label-title">
							<label>Salary</label>
						</div>
						<div class="col-sm-8">
							<select class="sl-salary form-control input-sm" id="salary" name="desired_salary">
								<option value="">---Select---</option> @foreach($salaries as
								$salary)
								<option value="{{$salary->id}}">{{$salary->min}} ~ Up</option>
								@endforeach
							</select>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="box-footer">
			<button type="submit" class="btn btn-default" style="width: 100px;"><i class="fa fa-floppy-o"></i> Save</button>
			<button type="button" class="btn btn-default" style="width: 100px;"><i class="fa fa-newspaper-o"></i> Preview</button>
		</div>
	</form>
	<div class="col-md-3 right-side-bar"></div>
	@endsection