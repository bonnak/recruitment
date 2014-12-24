@extends('layouts.default')

@section('candidate')
	<div class="col-md-2 left-side-bar">
		<ul class="list-unstyled">
			<li><h3 class="title"><a href="{{URL::route('user.candidate')}}">Dashboard</a></h3></li>
		</ul>
		<ul class="list-unstyled">
			<li><h3 class="title">CV and Cover Letters</h3>
				<ul class="list-unstyled">
					<li role="presentation"><a href="{{URL::route('user.candidate.create')}}">Create a CV</a><hr class="menu-seperator"></li>
					<li role="presentation"><a href="#industry">My CV</a><hr class="menu-seperator"></li>
					<li role="presentation"><a href="#location">Create a cover letter</a><hr class="menu-seperator"></li>
					<li role="presentation"><a href="#salary">My cover letter</a><hr class="menu-seperator"></li>
				</ul>
			</li>
		</ul>
		<ul class="list-unstyled">
			<li><h3 class="title">Jobs</h3>
				<ul class="list-unstyled">
					<li role="presentation"><a href="#category">Recommended jobs</a><hr class="menu-seperator"></li>
					<li role="presentation"><a href="#industry">Job alerts</a><hr class="menu-seperator"></li>
					<li role="presentation"><a href="#location">Saved jobs</a><hr class="menu-seperator"></li>
					<li role="presentation"><a href="#salary">Apply list</a><hr class="menu-seperator"></li>
				</ul>
			</li>
		</ul>
		<ul class="list-unstyled">
			<li><h3 class="title">Account Settings</h3>
				<ul class="list-unstyled">
					<li role="presentation"><a href="#category">My profile</a><hr class="menu-seperator"></li>
					<li role="presentation"><a href="#industry">Change email</a><hr class="menu-seperator"></li>
					<li role="presentation"><a href="#location">Change password</a><hr class="menu-seperator"></li>
					<li role="presentation"><a href="#location">logout</a><hr class="menu-seperator"></li>
				</ul>
			</li>
		</ul>
	</div>
	<div class="col-md-7 middle-wrapper">
		@if(Route::currentRouteName() === 'user.candidate')
		hi
		@elseif(Route::currentRouteName() === 'user.candidate.create')
			<div id="cv-create">				
				<div>
					<h4>Basic Information</h4>
					<div style="width: 70%; margin-left: 30px;">
						<div class="row input-elements">
							<div class="col-sm-4 label-title">
								<label>Surname</label>
							</div>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="surname"
									name="surname">
							</div>
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
								<select class="form-control" id="marital-status"
									name="marital-status">
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
								<input type="email" class="form-control" id="email"
									name="email">
							</div>
						</div>						
					</div>
				</div>
				<div>
					<h4>Education Background</h4>
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
								<input type="text" class="form-control" id="major"
									name="major">
							</div>
						</div>
						<div class="row input-elements">
							<div class="col-sm-4 label-title">
								<label>Degree</label>
							</div>
							<div class="col-sm-8">
								<select class="form-control" id="degree"
									name="degree">
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
								<select class="form-control" id="situation"
									name="situation">
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
									<span>Year</span>
									<input type="text" class="form-control" id="graduation-year"
										name="graduation-year" style="width: 80px;">
									<span>Month</span>
									<input type="text" class="form-control" id="graduation-month"
										name="graduation-month" style="width: 80px;">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div>
					<h4>Work Experience</h4>
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
								<select class="form-control" id="industry"
									name="industry">
									<option value="">--Select--</option>
									<option value="">Construction / Architecture</option>
									<option value="">Education</option>
									<option value="">Accounting / Finance</option>
								</select>
							</div>
						</div>
						<div class="row input-elements">
							<div class="col-sm-4 label-title">
								<label>Function</label>
							</div>
							<div class="col-sm-8">
								<select class="form-control" id="function"
									name="function">
									<option value="">--Select--</option>
									<option value="">Accounting / Financial</option>
									<option value="">Advertising / Media</option>
									<option value="">Arts / Creative Design</option>
								</select>
							</div>
						</div>
						<div class="row input-elements">
							<div class="col-sm-4 label-title">
								<label>Location</label>
							</div>
							<div class="col-sm-8">
								<select class="form-control" id="location"
									name="location">
									<option value="">--Select--</option>
									<option value="">Phnom Penh</option>
									<option value="">Siemreab</option>
									<option value="">Kandal</option>
								</select>
							</div>
						</div>
						<div class="row input-elements">
							<div class="col-sm-4 label-title">
								<label>Last salary</label>
							</div>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="last-salary"
									name="last-salary">
							</div>
						</div>
						<div class="row input-elements">
							<div class="col-sm-4 label-title">
								<label>From</label>
							</div>
							<div class="col-sm-8">
								<div class="form-inline">
									<span>Year</span>
									<select class="form-control" id="from-year"
										name="from-year" style="width: 80px;">
										<option value=""></option>
										<option>2000</option>
										<option>2008</option>
										<option>2010</option>
										<option>2014</option>
									</select>
									<span>Month</span>
									<select class="form-control" id="from-month"
										name="from-month" style="width: 80px;">
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
				<div>
					<h4>Skills</h4>
					<div style="width: 70%; margin-left: 30px;">
						<div class="row input-elements">
							<div class="col-sm-4 label-title">
								<label>Skill</label>
							</div>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="skill"
									name="skill">
							</div>
						</div>
					</div>
				</div>
				<div>
					<h4>Languages</h4>
					<div style="width: 70%; margin-left: 30px;">
					</div>
				</div>
			</div>				
		@endif
	</div>
	<div class="col-md-3 right-side-bar"></div>
@endsection