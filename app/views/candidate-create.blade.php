@extends('layouts.default') @section('candidate')
<div class="col-md-2 left-side-bar">
	<div>
		@foreach($main_menu as $menu => $url)
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
<div class="col-md-7 middle-wrapper">
	<form method="post" action="{{URL::route('candidate.cv.create.post')}}">
		<div>
			<div class="view-name title-bar">
				<strong>Basic Information</strong>
			</div>
			<div class="box-body">
				<div style="width: 70%; margin-left: 30px;">
					<div class="row input-elements">
						<div class="col-sm-4 label-title">
							<label>Surname</label>
						</div>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="surname"
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
							<input type="text" class="form-control" id="name" name="name">
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
							<input type="date" class="form-control" id="date_of_birth"
								name="date_of_birth">
						</div>
					</div>
					<div class="row input-elements">
						<div class="col-sm-4 label-title">
							<label>Marital Status</label>
						</div>
						<div class="col-sm-8">
							<select class="form-control" id="marital_status"
								name="marital_status">
								<option value="">Select ...</option>
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
							<select class="form-control" id="nationality" name="nationality">
								<option value="">Select ...</option>
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
							<select class="form-control" id="residence" name="residence">
								<option value="">Select ...</option>
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
							<textarea class="form-control" id="address" name="address"></textarea>
						</div>
					</div>
					<div class="row input-elements">
						<div class="col-sm-4 label-title">
							<label>Phone</label>
						</div>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="phone_number"
								name="phone_number">
						</div>
					</div>
					<div class="row input-elements">
						<div class="col-sm-4 label-title">
							<label>Email</label>
						</div>
						<div class="col-sm-8">
							<input type="email" class="form-control" id="email" name="email">
						</div>
					</div>
				</div>			
			</div>
		</div>
		<div style="margin-top: 20px;">
			<div class="view-name title-bar">
				<strong>Education Background</strong>
			</div>
			<div class="box-body">
			<div style="width: 70%; margin-left: 30px;">
				<div class="row input-elements">
						<div class="col-sm-4 label-title">
							<label>Institute</label>
						</div>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="institute"
								name="institute">
						</div>
					</div>
					<div class="row input-elements">
						<div class="col-sm-4 label-title">
							<label>Major</label>
						</div>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="major" name="major">
						</div>
					</div>
					<div class="row input-elements">
						<div class="col-sm-4 label-title">
							<label>Degree</label>
						</div>
						<div class="col-sm-8">
							<select class="form-control" id="degree" name="degree">
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
							<select class="form-control" id="situation" name="situation">
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
								<span>Year</span> <input type="text" class="form-control"
									id="graduation-year" name="graduation-year"
									style="width: 80px;"> <span>Month</span> <input type="text"
									class="form-control" id="graduation-month"
									name="graduation-month" style="width: 80px;">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div style="margin-top: 20px;">
			<div class="view-name title-bar">
				<strong>Work Experience</strong>
			</div>
			<div class="box-body">
			<div style="width: 70%; margin-left: 30px;">
				<div class="row input-elements">
						<div class="col-sm-4 label-title">
							<label>Job title</label>
						</div>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="job-title"
								name="job-title">
						</div>
					</div>
					<div class="row input-elements">
						<div class="col-sm-4 label-title">
							<label>Company</label>
						</div>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="company"
								name="company">
						</div>
					</div>
					<div class="row input-elements">
						<div class="col-sm-4 label-title">
							<label>Industry</label>
						</div>
						<div class="col-sm-8">
							<select class="form-control" id="ex-industry" name="ex-industry">
								<option value="">Select ...</option> @foreach($industries as
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
							<select class="form-control" id="ex-location" name="ex-location">
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
								<span>Year</span> <select class="form-control" id="from-year"
									name="from-year" style="width: 80px;">
									<option value=""></option>
									<option>2000</option>
									<option>2008</option>
									<option>2010</option>
									<option>2014</option>
								</select> <span>Month</span> <select class="form-control"
									id="from-month" name="from-month" style="width: 80px;">
									<option value=""></option>
									<option value="1">January</option>
									<option value="2">February</option>
									<option value="3">March</option>
									<option value="4">April</option>
								</select>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div style="margin-top: 20px;">
			<div class="view-name title-bar">
				<strong>Skills</strong>
			</div>
			<div class="box-body">
				<div style="width: 70%; margin-left: 30px;">
					<div class="row input-elements">
						<div class="col-sm-4 label-title">
							<label>Skill</label>
						</div>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="skill" name="skill">
						</div>
					</div>
					<div class="row input-elements">
						<div class="col-sm-4 label-title">
							<label>Level</label>
						</div>
						<div class="col-sm-8">
							<select class="form-control" id="skill-level" name="skill-level">
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
		<div style="margin-top: 20px;">
			<div class="view-name title-bar">
				<strong>Languages</strong>
			</div>
			<div class="box-body">
				<div style="width: 70%; margin-left: 30px;">
					<div class="row input-elements">
						<div class="col-sm-4 label-title">
							<label>Language</label>
						</div>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="language"
								name="language">
						</div>
					</div>
					<div class="row input-elements">
						<div class="col-sm-4 label-title">
							<label>Level</label>
						</div>
						<div class="col-sm-8">
							<select class="form-control" id="language-level"
								name="language-level">
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
		<div style="margin-top: 20px;">
			<div class="view-name title-bar">
				<strong>Expectation</strong>
			</div>
			<div class="box-body">
				<div style="width: 70%; margin-left: 30px;">
					<div class="row input-elements">
						<div class="col-sm-4 label-title">
							<label>Function</label>
						</div>
						<div class="col-sm-8">
							<select class="form-control" id="function" name="desired_function">
								<option value="">Select ...</option> @foreach($functions as
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
							<select class="form-control" id="industry" name="desired_industry">
								<option value="">Select ...</option> @foreach($industries as
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
							<select class="form-control" id="location" name="desired_location">
								<option value="">Select ...</option> @foreach($locations as
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
							<select class="form-control" id="salary" name="desired_salary">
								<option value="">Negociatable</option> @foreach($salaries as
								$salary)
								<option value="{{$salary->id}}">{{$salary->min}} ~ Up</option>
								@endforeach
							</select>
						</div>
					</div>
				</div>
			</div>
		</div>
		<input type="submit" class="btn btn-default" value="Create CV">
	</form>
	<div class="col-md-3 right-side-bar"></div>
	@endsection