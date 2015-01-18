@extends('layouts.default') @section('candidate')
<div class="col-md-2 left-side-bar">
	<div>@include('menu.menu')</div>
</div>
<div id="cv-edit" class="col-md-9 middle-wrapper">
	<div id="profile-card">
		<div class="row">
			<div class="col-sm-5">
				<img alt="Profile Photo"
					src="{{asset('assets/images/profile/no-profile-pic.jpg')}}"
					id="profile-pic">
			</div>
			<div class="col-sm-7">
				<h2>
					<span id="first-name">{{$candidate->surname}}</span>&nbsp;<span
						id="last-name">{{$candidate->name}}</span>
				</h2>
				<div>
					<span class="prefix-cv-info">Born</span><span class="cv-info">{{!empty($candidate->date_of_birth) ? \Carbon\Carbon::createFromFormat('Y-m-d', $candidate->date_of_birth)->format('Y-F-d') : ''}}</span>
				</div>
				<div>
					<span class="prefix-cv-info">Gender</span><span class="cv-info">{{Lang::get("local.gender.{$candidate->sex}")}}</span>
				</div>
				<div>
					<span class="prefix-cv-info">Marital Status</span><span
						class="cv-info">{{$candidate->marital_status}}</span>
				</div>
				<div>
					<span class="prefix-cv-info">Nationality</span><span
						class="cv-info">{{$candidate->nationality}}</span>
				</div>
				<div>
					<span class="prefix-cv-info">Phone</span><span
						class="cv-info">{{$candidate->phone_number}}</span>
				</div>
				<div>
					<span class="prefix-cv-info">Email</span><span
						class="cv-info">{{$candidate->email}}</span>
				</div>
			</div>
		</div>
	</div>
	<div id="back-card">
		<span class="card-article">Backgound</span>
		<div id="summary">
			<h3 class="part">Summary</h3>
			<p>Professional with 20+ years of experience in IT and Education
				industry.</p>
		</div>
		<div id="experience">
			<h3 class="part">Experience</h3>
			<div>
				@foreach($candidate->cv->work_experiences as $work_experience)
				<div class="items">
					<h4 class="job-title">{{$work_experience->job_title}}</h4>
					<div>
						<span class="prefix-cv-info">Company</span><span class="cv-info">{{$work_experience->company_name}}</span>
					</div>
					<div>
						<span class="prefix-cv-info">From</span><span class="cv-info">{{$work_experience->from_month}}-{{$work_experience->from_year}}</span><span
							class="prefix-cv-info" style="margin-left: 13px;">To</span><span
							class="cv-info">{{$work_experience->to_month}}-{{$work_experience->to_year}}</span>
					</div>
					<div>
						<span class="prefix-cv-info">Locate in</span><span class="cv-info">{{$work_experience->location}}</span>
					</div>
				</div>
				@endforeach
			</div>
			<div class="items-control">
				<a href="javascript:onclick" class="btn btn-addnew">Add New</a>
			</div>
		</div>
		<div id="edu">
			<h3 class="part">Education</h3>
			<div>
				@foreach($candidate->cv->education as $education)
				<div class="items">
					<h4 class="institute">{{$education->institute}}</h4>
					<div>
						<span class="cv-info">{{$education->degree}}</span> in <span>{{$education->major}}</span>
					</div>
					<div>
						<span class="cv-info">{{$education->from_year}} - {{$education->grad_year}}</span>
					</div>
				</div>
				@endforeach
			</div>
			<div class="items-control">
				<a href="javascript:onclick" class="btn btn-addnew">Add New</a>
			</div>
		</div>
		<div id="skills">
			<h3 class="part">Skills</h3>
			<div>
				<div class="items clearfix">
					@foreach($candidate->cv->skills as $skill)
					<div class="item round-box-wrapper">
						<div>
							<span class="cv-info">{{$skill->name}}</span>&nbsp;&nbsp;&nbsp;<span
								class="text-muted">{{$skill->level}} ({{$skill->year_experience}}years)</span>
						</div>
					</div>
					@endforeach
				</div>
			</div>
			<div class="items-control">
				<a href="javascript:onclick" class="btn btn-addnew">Add New</a>
			</div>
		</div>
		<div id="languages">
			<h3 class="part">Languages</h3>
			<div>
				<div class="items">
					@foreach($candidate->cv->languages as $language)
					<div class="item">
						<span class="lang">{{$language->language}}</span>&nbsp;&nbsp;&nbsp;<span
							class="text-muted">Limited Work Proficiency</span>
					</div>
					@endforeach
				</div>
			</div>
			<div class="items-control">
				<a href="javascript:onclick" class="btn btn-addnew">Add New</a>
			</div>
		</div>
	</div>
	<div id="expectation-card">
		<span class="card-article">Expectation</span>
		<div>
			<h3 class="part">Functions</h3>
			<div>
				<div class="items clearfix">
					@foreach($candidate->cv->expectation->functions as $function)
					<div class="item round-box-wrapper">
						<span class="cv-info">{{$function->function}}</span>
					</div>
					@endforeach
				</div>
			</div>
		</div>
		<div>
			<h3 class="part">Industries</h3>
			<div>
				<div class="items clearfix">
					@foreach($candidate->cv->expectation->industries as $industry)
					<div class="item round-box-wrapper">
						<span class="cv-info">{{$industry->industry}}</span>
					</div>
					@endforeach
				</div>
			</div>
		</div>
		<div>
			<h3 class="part">Locations</h3>
			<div>
				<div class="items clearfix">
					@foreach($candidate->cv->expectation->locations as $location)
					<div class="item round-box-wrapper">
						<span class="cv-info">{{$location->location_id}}</span>
					</div>
					@endforeach
				</div>
			</div>
		</div>
		<div>
			<h3 class="part">Salary</h3>
			<div>
				<div class="items clearfix">
					<div class="item round-box-wrapper">
						<span class="cv-info">{{$candidate->cv->expectation->salary->min_salary}} - {{$candidate->cv->expectation->salary->max_salary}}</span>
					</div>
				</div>
			</div>
		</div>
		<div>
			<h3 class="part">Terms</h3>
			<div>
				<div class="items clearfix">
					@foreach($candidate->cv->expectation->job_terms as $job_term)
					<div class="item round-box-wrapper">
						<span class="cv-info">{{$job_term->term}}</span>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
	<div id="ref-card">
		<span class="card-article">Reference</span>
		<div></div>
	</div>
</div>
<div class="col-md-3 right-side-bar"></div>
@endsection
