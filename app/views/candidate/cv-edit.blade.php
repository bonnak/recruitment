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
				{{\Form::open(['route' => ['candidate.cv.edit.summary.put', $candidate->cv->id],  'method' => 'put'])}}
					<div class="form-group">
					      <textarea class="form-control" id="ex-summary">{{$candidate->cv->summary}}</textarea>
					</div>
					<div class="opt-controls">
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
						<div class="content-show">
							<h4 id="span-job-title" class="job-title">{{$work_experience->job_title}}</h4>
							<div>
								<span class="prefix-cv-info">Company</span><span id="span-company-name" class="cv-info">{{$work_experience->company_name}}</span>
							</div>
							<div>
								<span class="prefix-cv-info">From</span>
								<span id="span-from-date" class="cv-info" data-month="{{$work_experience->from_month}}" data-year="{{$work_experience->to_year}}">
									@if(!empty($work_experience->from_year) && !empty($work_experience->from_month))
										{{date('F - Y', mktime(0, 0, 0, $work_experience->from_month, 1, $work_experience->from_year))}}
									@elseif(!empty($work_experience->from_year))
										{{$work_experience->from_year}}
									@endif
								</span>
								<span class="prefix-cv-info" style="margin-left: 13px;">To</span>
								<span id="span-to-date" class="cv-info" data-month="{{$work_experience->to_month}}" data-year="{{$work_experience->to_year}}">
									@if(!empty($work_experience->to_year) && !empty($work_experience->to_month))
										{{date('F - Y', mktime(0, 0, 0, $work_experience->to_month, 1, $work_experience->to_year))}}
									@elseif(!empty($work_experience->to_year))
										{{$work_experience->to_year}}
									@else
										Present
									@endif
								</span>
							</div>
							<div>
								<span class="prefix-cv-info">Locate in</span><span id="span-ex-location" class="cv-info">{{$work_experience->location}}</span>
							</div>										
							<div>
								<p id="span-job-description">{{$work_experience->job_description}}</p>
							</div>										
							<div class="card-btn-group">							
								<a href="javascript:onclick" class="glyphicon glyphicon-file"></a>
								<a href="javascript:onclick" class="glyphicon glyphicon-pencil btn-edit-cv"></a>
							</div>
						</div>
						<div class="form-edit hide">
							{{\Form::open(['route' => ['candidate.cv.edit.experience.put', $candidate->cv->id, $work_experience->id],  'method' => 'put', 'class' => 'form-horizontal'])}}
								<div class="form-group">
									<label for="input-job-title" class="col-sm-3 control-label">Job Title</label>
								    <div class="col-sm-8">
								      <input type="text" class="form-control" id="input-job-title" value="{{$work_experience->job_title}}">
								    </div>
								</div>
								<div class="form-group">
									<label for="input-company-name" class="col-sm-3 control-label">Company name</label>
								    <div class="col-sm-5">
								      <input type="text" class="form-control" id="input-company-name" value="{{$work_experience->company_name}}">
								    </div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Duration</label>
								    <div class="col-sm-9">
								      <div class="pull-left clearfix">
								      	<select type="text" class="form-control pull-left" id="input-ex-from-month" style="width: 120px;">
								      		<option value="">---Month--</option>
								      		@foreach(\Config::get('setup.months') as $month)
								      			<option value="{{$month['num']}}" {{$work_experience->from_month == $month['num'] ? 'selected' : ''}}>{{$month['name']}}</option>
								      		@endforeach
								      	</select>
								      	<input type="text" class="form-control pull-left" id="input-ex-from-year" value="{{$work_experience->from_year}}"  style="width: 60px; margin-left: 5px;" Placeholder="Year">
								      </div> 
								      <div class="pull-left" style="padding-top: 6px; font-weight: 600;">&nbsp;&nbsp;To&nbsp;&nbsp;</div>
								      <div class="pull-left clearfix">
								      	<select type="text" class="form-control pull-left" id="input-ex-to-month" style="width: 120px;">
								      		<option value="">---Month--</option>
								      		@foreach(\Config::get('setup.months') as $month)
								      			<option value="{{$month['num']}}" {{$work_experience->to_month == $month['num'] ? 'selected' : ''}}>{{$month['name']}}</option>
								      		@endforeach
								      	</select>
								      	<input type="text" class="form-control pull-left" id="input-ex-to-year" value="{{$work_experience->to_year}}"  style="width: 60px; margin-left: 5px;" Placeholder="Year">
								      </div>
								    </div>
								</div>
								<div class="form-group">
									<label for="ex-location" class="col-sm-3 control-label">Location</label>
								    <div class="col-sm-5">
								      <input type="text" class="form-control" id="input-ex-location" name="ex-location" value="{{$work_experience->location}}">
								    </div>
								</div>
								<div class="form-group">
									<label for="input-job-description" class="col-sm-3 control-label">Description</label>
								    <div class="col-sm-9">
								      <textarea class="form-control" id="input-job-description">{{$work_experience->job_description}}</textarea>
								    </div>
								</div>
								<div class="opt-controls">
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
					<div class="content-show">
						<h4 id="span-institute">{{$education->institute}}</h4>
						<div>
							<span id="span-degree" class="cv-info">{{$education->degree}}</span> in <span id="span-major">{{$education->major}}</span>
						</div>
						<div>
							<span class="cv-info"><span id="span-from-year">{{$education->from_year}}</span> - <span id="span-grad-year">{{$education->grad_year}}</span></span>
						</div>
						<div class="card-btn-group">
							<a href="javascript:onclick" class="glyphicon glyphicon-file"></a>
							<a href="javascript:onclick" class="glyphicon glyphicon-pencil btn-edit-cv"></a>
						</div>
					</div>
					<div class="form-edit hide">
							{{\Form::open(['route' => ['candidate.cv.edit.edu.put', $candidate->cv->id, $education->id],  'method' => 'put', 'class' => 'form-horizontal'])}}
								<div class="form-group">
									<label for="input-institute" class="col-sm-3 control-label">Institute</label>
								    <div class="col-sm-8">
								      <input type="text" class="form-control" id="input-institute" value="{{$education->institute}}">
								    </div>
								</div>
								<div class="form-group">
									<label for="input-major" class="col-sm-3 control-label">Major</label>
								    <div class="col-sm-8">
								      <input type="text" class="form-control" id="input-major" value="{{$education->major}}">
								    </div>
								</div>
								<div class="form-group">
									<label for="input-degree" class="col-sm-3 control-label">Degree</label>
								    <div class="col-sm-4">
								      <select type="text" class="form-control" id="input-degree">
								      	<option value="">--Select--</option>
										@foreach(\Degree::all() as $degree)
										<option value="{{$degree->id}}" {{$education->degree_id === $degree->id ? 'selected' : ''}}>{{$degree->description}}</option>
										@endforeach
								      </select>
								    </div>
								</div>
								<div class="form-group">
									<label for="input-from-year" class="col-sm-3 control-label">Start School</label>
								    <div class="col-sm-8">
								      <input type="text" class="form-control" id="input-from-year" value="{{$education->from_year}}" style="width: 70px;">
								    </div>
								</div>
								<div class="form-group">
									<label for="input-grad-year" class="col-sm-3 control-label">Graduation year</label>
								    <div class="col-sm-8">
								      <input type="text" class="form-control" id="input-grad-year" value="{{$education->grad_year}}" style="width: 70px;">
								    </div>
								</div>
								<div class="opt-controls">
							      <button type="button" class="btn btn-primary btn-save">Save</button>
							      <button type="button" class="btn btn-danger btn-cancel">Cancel</button>
							  </div>
						  {{\Form::close()}}
						</div>
				</div>
				@endforeach
			</div>
		</div>
		<div id="skills">
			<div>
				<h3 class="part">Skills</h3>
				<div class="content-show">
					<div class="items clearfix">
						@foreach($candidate->cv->skills as $skill)
						<div class="item round-box-wrapper">
							<span class="cv-info" id="skill-name">{{$skill->name}}</span>&nbsp;&nbsp;&nbsp;
							<span class="skill-detail text-muted">{{$skill->level}} ({{$skill->year_experience}} years)</span>
						</div>
						@endforeach
					</div>
					<div class="card-btn-group">
						<a href="javascript:onclick" class="glyphicon glyphicon-file"></a>
						<a href="javascript:onclick" class="glyphicon glyphicon-pencil btn-edit-cv"></a>
					</div>
				</div>
				<div class="form-edit hide">
					{{\Form::open(['route' => ['candidate.cv.edit.skill.put', $candidate->cv->id],  'method' => 'put'])}}
						<h4>What is your area of expertise?</h4>
						<div id="new-skill" class="clearfix">
							<input type="text" class="form-control pull-left" id="input-skill-name" placeholder="Skill name" style="width: 295px; margin-right: 5px;">
							<input type="text" class="form-control pull-left" id="input-skill-year-exp" placeholder="Year of experience" style="width: 100px; margin-right: 5px;">
							<select class="form-control pull-left" id="input-skill-level" style="width: 130px; margin-right: 5px;">
								<option value="">---Level---</option>
								@foreach(\Level::all() as $level)
								<option value="{{$level->id}}">{{$level->description}}</option>
								@endforeach
							</select>
							<button type="button" id="btn-add" class="btn btn-primary">Add</button>
						</div>
						<div id="skills-collection" class="items clearfix" style="background-color: #FFF; padding: 12px; border: 1px solid #ccc; border-radius: 5px;">
							@foreach($candidate->cv->skills as $skill)
							<div class="item round-box-wrapper">
								<div class="span-content">
									<span class="cv-info" id="skill-name">{{$skill->name}}</span>&nbsp;&nbsp;&nbsp;
									<span class="skill-detail text-muted">{{$skill->level}} ({{$skill->year_experience}} years)</span>&nbsp;
									<a href="javascript:onclick" class="btn-remove glyphicon glyphicon-remove" onclick="remove_skill_cv_edit(this)"></a>
								</div>
								<div class="hidden-input">
									<input type="hidden" id="input-skill-id" value="{{$skill->id}}">
									<input type="hidden" id="input-skill-name" value="{{$skill->name}}">
									<input type="hidden" id="input-skill-level" value="{{$skill->level_id}}">
									<input type="hidden" id="input-skill-year-exp" value="{{$skill->year_experience}}">
									<input type="hidden" id="input-skill-status" value="2">
								</div>
							</div>
							@endforeach
						</div>
						<div class="opt-controls">
					      <button type="button" class="btn btn-primary btn-save">Save</button>
					      <button type="button" class="btn btn-danger btn-cancel">Cancel</button>
					  </div>						
					{{\Form::close()}}
				</div>
			</div>			
		</div>
		<div id="languages">
			<h3 class="part">Languages</h3>
			<div class="content-show">
				<div class="items">
					@foreach($candidate->cv->languages as $language)
					<div class="item">
						<span class="lang">{{$language->language}}</span>&nbsp;&nbsp;&nbsp;<span
							class="text-muted">{{$language->proficiency}}</span>
					</div>
					@endforeach
				</div>
				<div class="card-btn-group">
					<a href="javascript:onclick" class="glyphicon glyphicon-file"></a>
					<a href="javascript:onclick" class="glyphicon glyphicon-pencil btn-edit-cv"></a>
				</div>
			</div>
			<div class="form-edit hide">
				{{\Form::open(['route' => ['candidate.cv.edit.lang.put', $candidate->cv->id],  'method' => 'put', 'class' => 'form-inline'])}}
					<div id="lang-collection">	
						@foreach($candidate->cv->languages as $language)
						<div class="item">
							<div class="form-group">
						   	<input type="text" class="form-control" id="input-lang-name" placeholder="Language" value="{{$language->language}}">
						   </div>
						   <div class="form-group">
						   	<select class="form-control" id="input-lang-proficiency">
						   		<option value="">---Proficiency---</option>
									@foreach(\Proficiency::all() as $proficiency)
									<option value="{{$proficiency->id}}" {{$language->proficiency_id === $proficiency->id ? 'selected' : ''}}>{{$proficiency->proficiency}}</option>
									@endforeach
						   	</select>
						   </div>
						   <div class="form-group">
							   <a href="javascript:onclick" class="btn-remove glyphicon glyphicon-remove" onclick="remove_lang_cv_edit(this)" ></a>
							</div>
							<input type="hidden" id="input-lang-id" value="{{$language->id}}">
							<input type="hidden" id="input-lang-status" value="2">
						</div>
					   @endforeach
					</div>
				   <div class="item-add-new">
				   	<div class="form-group">
					   	<input type="text" class="form-control" id="input-lang-name" placeholder="Language">
					   </div>
					   <div class="form-group">
					   	<select class="form-control" id="input-lang-proficiency">
					   		<option value="">---Proficiency---</option>
								@foreach(\Proficiency::all() as $proficiency)
								<option value="{{$proficiency->id}}">{{$proficiency->proficiency}}</option>
								@endforeach
					   	</select>
					   </div>
					   <div class="form-group">
						   <a href="javascript:onclick" class="btn-add glyphicon glyphicon-plus"></a>
						</div>
						<input type="hidden" id="input-lang-status" value="">
				   </div>
				   <div class="item-clone hide">
				   	<div class="form-group">
					   	<input type="text" class="form-control" id="input-lang-name" placeholder="Language">
					   </div>
					   <div class="form-group">
					   	<select class="form-control" id="input-lang-proficiency">
					   		<option value="">---Proficiency---</option>
								@foreach(\Proficiency::all() as $proficiency)
								<option value="{{$proficiency->id}}">{{$proficiency->proficiency}}</option>
								@endforeach
					   	</select>
					   </div>
					   <div class="form-group">
						   <a href="javascript:onclick" class="btn-remove glyphicon glyphicon-remove" onclick="remove_lang_cv_edit(this)"></a>
						</div>
						<input type="hidden" id="input-lang-id">
						<input type="hidden" id="input-lang-status">
				   </div>
				{{\Form::close()}}
				<div class="opt-controls">
			      <button type="button" class="btn btn-primary btn-save">Save</button>
			      <button type="button" class="btn btn-danger btn-cancel">Cancel</button>
			  </div>	
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
