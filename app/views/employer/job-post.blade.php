@extends('layouts.default') 

@section('employer')
<div class="left-side-bar pull-left">
	<div>@include('menu.menu')</div>
</div>
<div id="employer" class="middle-wrapper pull-left">
	<div id="job-post">
		<div class="title-bar">Create New Job</div>
		<div class="content-wrapper">
			{{\Form::open(['route' => ['employer.job-post.post', $emp_id], 'method' => 'post', 'class' => 'form-horizontal'])}}
				<div id="title-block" class="block clearfix">
					<label for="input-job-title" class="control-label pull-left">Job Title</label>
				    <div class="field pull-left">
				      <input type="text" class="form-control" id="input-job-title" name="input-job-title">
				    </div>
				    @if($errors->has())
						<div class="error">								
							{{$errors->first('input-job-title', ':message')}}
						</div>
					@endif
				</div>
				<div id="desc-block" class="block clearfix">
					<label for="input-job-description" class="control-label">Description</label>
				    <div class="field">
				      <textarea type="text" class="form-control" id="input-job-description" name="input-job-description"></textarea>
				    </div>
				    @if($errors->has())
						<div class="error">								
							{{$errors->first('input-job-description', ':message')}}
						</div>
					@endif
				</div>
				<div id="option-block" class="block clearfix">					
					<div class="ctr-group nomargin clearfix pull-left">
						<label for="input-salary-range" class="control-label pull-left">Salary Range</label>
					    <div class="field pull-left">
					      <input type="text" class="form-control" id="input-salary-range" name="input-salary-range">
					    </div>
				    </div>
				    <div class="ctr-group clearfix pull-left">
						<label for="input-gender" class="control-label pull-left">Gender</label>
					    <div class="field pull-left">
					      <select type="text" class="form-control" id="input-gender" name="input-gender">
					      	<option value=""></option>
					      	<option value="M">Male</option>
					      	<option value="F">Female</option>
					      </select>
					    </div>
					</div>
					<div class="ctr-group clearfix pull-left">
						<label for="input-qualification" class="control-label pull-left">Qualification</label>
					    <div class="field pull-left">
					      <select type="text" class="form-control" id="input-qualification" name="input-qualification">
					      		<option value="">--Select--</option>
					      		@foreach(\Degree::all() as $degree)
								<option value="{{$degree->id}}" >{{$degree->description}}</option>
								@endforeach
					      </select>
					    </div>
					</div>
					<div class="ctr-group nomargin clearfix pull-left">
						<label for="input-hiring" class="control-label pull-left">Hiring</label>
					    <div class="field pull-left">
					      <input type="text" class="form-control" id="input-hiring" name="input-hiring">
					    </div>
					</div>
					<div class="ctr-group clearfix pull-left">
						<label for="input-age-range" class="control-label pull-left">Age Range</label>
					    <div class="field pull-left">
					      <input type="text" class="form-control" id="input-age-range" name="input-age-range">
					    </div>
					</div>
					<div class="ctr-group clearfix pull-left">
						<label for="input-min-year-exp" class="control-label pull-left">Year Experience</label>
					    <div class="field pull-left">
					      <input type="text" class="form-control" id="input-min-year-exp" name="input-min-year-exp">
					    </div>
					</div>
					<div class="ctr-group nomargin clearfix pull-left">
						<label for="input-function" class="control-label pull-left">Function</label>
					    <div class="field pull-left">
					      <select type="text" class="form-control" id="input-function" name="input-function">
					      		<option value="">--Select--</option>
					      		@foreach(\Func::all() as $func)
								<option value="{{$func->id}}" >{{$func->name}}</option>
								@endforeach
					      </select>
					    </div>
					</div>
					<div class="ctr-group clearfix pull-left">
						<label for="input-function" class="control-label pull-left">Function</label>
					    <div class="field pull-left">
					      <select type="text" class="form-control" id="input-function" name="input-function">
					      		<option value="">--Select--</option>
					      		@foreach(\Func::all() as $func)
								<option value="{{$func->id}}" >{{$func->name}}</option>
								@endforeach
					      </select>
					    </div>
					</div>
					<div class="ctr-group clearfix pull-left">
						<label for="input-industry" class="control-label pull-left">Industry</label>
					    <div class="field pull-left">
					      <select type="text" class="form-control" id="input-industry" name="input-industry">
					      		<option value="">--Select--</option>
					      		@foreach(\Industry::all() as $industry)
								<option value="{{$industry->id}}" >{{$industry->name}}</option>
								@endforeach
					      </select>
					    </div>
					</div>
				</div>
				
				
				
				
				
				
				<div class="block">
					<h4>Publish and closing date</h4>
					<div class="clearfix">
						<div class="clearfix pull-left">
							<label for="input-closing-date" class="control-label pull-left">Closing Date</label>
						    <div class="field pull-left">
						      <input type="text" class="form-control" id="input-closing-date" name="input-closing-date">
						    </div>
						</div>
						<div class="checkbox pull-left">
						    <label>
						    	<input type="checkbox"> Publish this job
						    </label>
						</div>
					</div>
				</div>
				
				<div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="submit" class="btn btn-default">Save</button>
			    </div>
			  </div>
			{{\Form::close()}}
		</div>
	</div>
</div>
<div class="right-side-bar pull-left"></div>
@endsection