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
			<div class="content-show clearfix">
				<p>{{nl2br($candidate->cv->summary)}}</p>
				<div class="card-btn-group">
					<a href="javascript:onclick" class="glyphicon glyphicon-pencil btn-edit-cv"></a>
				</div>
			</div>
			<div class="form-edit hide">
				{{\Form::open(['route' => ['candidate.cv.edit.summary.put', $candidate->cv->id],  'method' => 'put', 'data-id' => $candidate->cv->id])}}
					<div class="form-group">
						<textarea name="cv-summary">{{$candidate->cv->summary}}</textarea>
					</div>
					<div class="form-group opt-controls">
				      <button type="button" class="btn btn-primary btn-save">Save</button>
				      <button type="button" class="btn btn-danger btn-cancel">Cancel</button>
				  </div>
			  {{\Form::close()}}
			</div>
		</div>
		<div id="experience">
			<div>
				<h3 class="part">Experience</h3>
				<div>
					@foreach($candidate->cv->work_experiences as $work_experience)
					<div class="items">
						<h4 class="job-title">{{$work_experience->job_title}}</h4>						
						<div class="content-show">
							<div>
								<span class="prefix-cv-info">Company</span><span class="cv-info">{{$work_experience->company_name}}</span>
							</div>
							<div>
								<span class="prefix-cv-info">From</span><span class="cv-info">{{!empty($work_experience->from_year) ? date('F - Y', mktime(0, 0, 0, $work_experience->from_month, 1, $work_experience->from_year)) : ''}}</span><span
									class="prefix-cv-info" style="margin-left: 13px;">To</span><span
									class="cv-info">{{!empty($work_experience->to_year) ? date('F - Y', mktime(0, 0, 0, $work_experience->to_month, 1, $work_experience->to_year)) : 'Present'}}</span>
							</div>
							<div>
								<span class="prefix-cv-info">Locate in</span><span class="cv-info">{{$work_experience->location}}</span>
							</div>										
							<div class="card-btn-group">							
								<a href="javascript:onclick" class="glyphicon glyphicon-file"></a>
								<a href="javascript:onclick" class="glyphicon glyphicon-pencil btn-edit-cv"></a>
							</div>
						</div>
						<div class="form-edit hide">
							{{\Form::open(['route' => ['candidate.cv.edit.summary.put', $candidate->cv->id],  'method' => 'put', 'data-id' => $candidate->cv->id, 'class' => 'form-horizontal'])}}
								<div class="form-group">
									<label for="job-title" class="col-sm-3 control-label">Job Title</label>
								    <div class="col-sm-8">
								      <input type="text" class="form-control" id="job-title" value="{{$work_experience->job_title}}">
								    </div>
								</div>
								<div class="form-group">
									<label for="company-name" class="col-sm-3 control-label">Company name</label>
								    <div class="col-sm-5">
								      <input type="text" class="form-control" id="company-name" value="{{$work_experience->company_name}}">
								    </div>
								</div>
								<div class="form-group">
									<label for="company-name" class="col-sm-3 control-label">Duration</label>
								    <div class="col-sm-9">
								      <div class="pull-left clearfix">
								      	<select type="text" class="form-control pull-left" id="company-name" style="width: 120px;">
								      		<option value="">---Month--</option>
								      		<option value="1" {{$work_experience->from_month !== null ? 'selected' : ''}}>January</option>
								      		<option value="2" {{$work_experience->from_month !== null ? 'selected' : ''}}>February</option>
								      		<option value="3" {{$work_experience->from_month !== null ? 'selected' : ''}}>March</option>
								      		<option value="4" {{$work_experience->from_month !== null ? 'selected' : ''}}>April</option>
								      		<option value="5" {{$work_experience->from_month !== null ? 'selected' : ''}}>May</option>
								      		<option value="6" {{$work_experience->from_month !== null ? 'selected' : ''}}>June</option>
								      		<option value="7" {{$work_experience->from_month !== null ? 'selected' : ''}}>July</option>
								      		<option value="8" {{$work_experience->from_month !== null ? 'selected' : ''}}>August</option>
								      		<option value="9" {{$work_experience->from_month !== null ? 'selected' : ''}}>September</option>
								      		<option value="10" {{$work_experience->from_month !== null ? 'selected' : ''}}>October</option>
								      		<option value="11" {{$work_experience->from_month !== null ? 'selected' : ''}}>November</option>
								      		<option value="12" {{$work_experience->from_month !== null ? 'selected' : ''}}>December</option>
								      	</select>
								      	<input type="text" class="form-control pull-left" id="company-name" value="{{$work_experience->from_year}}"  style="width: 60px; margin-left: 5px;" Placeholder="Year">
								      </div> 
								      <div class="pull-left" style="padding-top: 6px; font-weight: 600;">&nbsp;&nbsp;To&nbsp;&nbsp;</div>
								      <div class="pull-left clearfix">
								      	<select type="text" class="form-control pull-left" id="company-name" style="width: 120px;">
								      		<option value="">---Month--</option>
								      		<option value="1" {{$work_experience->to_month !== null ? 'selected' : ''}}>January</option>
								      		<option value="2" {{$work_experience->to_month !== null ? 'selected' : ''}}>February</option>
								      		<option value="3" {{$work_experience->to_month !== null ? 'selected' : ''}}>March</option>
								      		<option value="4" {{$work_experience->to_month !== null ? 'selected' : ''}}>April</option>
								      		<option value="5" {{$work_experience->to_month !== null ? 'selected' : ''}}>May</option>
								      		<option value="6" {{$work_experience->to_month !== null ? 'selected' : ''}}>June</option>
								      		<option value="7" {{$work_experience->to_month !== null ? 'selected' : ''}}>July</option>
								      		<option value="8" {{$work_experience->to_month !== null ? 'selected' : ''}}>August</option>
								      		<option value="9" {{$work_experience->to_month !== null ? 'selected' : ''}}>September</option>
								      		<option value="10" {{$work_experience->to_month !== null ? 'selected' : ''}}>October</option>
								      		<option value="11" {{$work_experience->to_month !== null ? 'selected' : ''}}>November</option>
								      		<option value="12" {{$work_experience->to_month !== null ? 'selected' : ''}}>December</option>
								      	</select>
								      	<input type="text" class="form-control pull-left" id="company-name" value="{{$work_experience->to_year}}"  style="width: 60px; margin-left: 5px;" Placeholder="Year">
								      </div>
								    </div>
								</div>
								<div class="form-group opt-controls">
							      <button type="button" class="btn btn-primary btn-save">Save</button>
							      <button type="button" class="btn btn-danger btn-cancel">Cancel</button>
							  </div>
						  {{\Form::close()}}
						</div>
					</div>	
					@endforeach
				</div>
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
					<div class="card-btn-group">
						<a href="javascript:onclick" class="glyphicon glyphicon-file"></a>
						<a href="javascript:onclick" class="glyphicon glyphicon-pencil"></a>
					</div>
				</div>
				@endforeach
			</div>
		</div>
		<div id="skills">
			<div>
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
			</div>
			<div class="card-btn-group">
				<a href="javascript:onclick" class="glyphicon glyphicon-file"></a>
				<a href="javascript:onclick" class="glyphicon glyphicon-pencil"></a>
			</div>
		</div>
		<div id="languages">
			<div>
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
			</div>
			<div class="card-btn-group">
				<a href="javascript:onclick" class="glyphicon glyphicon-file"></a>
				<a href="javascript:onclick" class="glyphicon glyphicon-pencil"></a>
			</div>
		</div>
	</div>
	<div id="expectation-card">
		<span class="card-article">Expectation</span>
		<div>
			<div class="items">
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
				<div class="card-btn-group">
					<a href="javascript:onclick" class="glyphicon glyphicon-pencil"></a>
				</div>
			</div>
			<div class="items">
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
				<div class="card-btn-group">
					<a href="javascript:onclick" class="glyphicon glyphicon-pencil"></a>
				</div>
			</div>
			<div class="items">
				<h3 class="part">Locations</h3>
				<div>
					<div class="items clearfix">
						@foreach($candidate->cv->expectation->locations as $location)
						<div class="item round-box-wrapper">
							<span class="cv-info">{{$location->location}}</span>
						</div>
						@endforeach
					</div>
				</div>
				<div class="card-btn-group">
					<a href="javascript:onclick" class="glyphicon glyphicon-pencil"></a>
				</div>
			</div>
			<div class="items">
				<h3 class="part">Salary</h3>
				<div>
					<div class="items clearfix">
						<div class="item round-box-wrapper">
							<span class="cv-info">{{$candidate->cv->expectation->salary->min_salary}} - {{$candidate->cv->expectation->salary->max_salary}}</span>
						</div>
					</div>
				</div>
				<div class="card-btn-group">
					<a href="javascript:onclick" class="glyphicon glyphicon-pencil"></a>
				</div>
			</div>
			<div class="items">
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
				<div class="card-btn-group">
					<a href="javascript:onclick" class="glyphicon glyphicon-pencil"></a>
				</div>
			</div>
		</div>		
	</div>
	<div id="ref-card">
		<div class="items">
			<span class="card-article">Reference</span>
			<div class="items">
				<p>{{$candidate->cv->reference}}</p>			
			</div>
			<div class="card-btn-group">
				<a href="javascript:onclick" class="glyphicon glyphicon-pencil"></a>
			</div>
		</div>
	</div>
</div>
<div class="col-md-3 right-side-bar"></div>
@endsection
