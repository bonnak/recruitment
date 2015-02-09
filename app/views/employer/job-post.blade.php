@extends('layouts.default') 

@section('employer')
<div class="left-side-bar pull-left">
	<div>@include('menu.menu')</div>
</div>
<div id="employer" class="middle-wrapper pull-left">
	<div id="job-post">
		{{\Form::open(['route' => ['employer.job-post.post', $emp_id], 'method' => 'post', 'class' => 'form-horizontal'])}}
			<div class="form-group">
				<label for="input-job-title" class="col-sm-3 control-label">Job Title</label>
			    <div class="col-sm-8">
			      <input type="text" class="form-control" id="input-job-title">
			    </div>
			</div>
			<div class="form-group">
				<label for="input-job-description" class="col-sm-3 control-label">Description</label>
			    <div class="col-sm-8">
			      <textarea type="text" class="form-control" id="input-job-description" style="height: 100px;"></textarea>
			    </div>
			</div>
			<div class="form-group">
				<label for="input-salary-range" class="col-sm-3 control-label">Salary Range</label>
			    <div class="col-sm-8">
			      <input type="text" class="form-control" id="input-salary-range">
			    </div>
			</div>
			<div class="form-group">
				<label for="input-hiring" class="col-sm-3 control-label">Hiring</label>
			    <div class="col-sm-8">
			      <input type="text" class="form-control" id="input-hiring">
			    </div>
			</div>
			<div class="form-group">
				<label for="input-qualification" class="col-sm-3 control-label">Qualification</label>
			    <div class="col-sm-8">
			      <select type="text" class="form-control" id="input-qualification">
			      		<option value="">--Select--</option>
			      		@foreach(\Degree::all() as $degree)
						<option value="{{$degree->id}}" >{{$degree->description}}</option>
						@endforeach
			      </select>
			    </div>
			</div>
			<div class="form-group">
				<label for="input-min-year-exp" class="col-sm-3 control-label">Year Experience</label>
			    <div class="col-sm-8">
			      <input type="text" class="form-control" id="input-min-year-exp">
			    </div>
			</div>
			<div class="form-group">
				<label for="input-function" class="col-sm-3 control-label">Function</label>
			    <div class="col-sm-8">
			      <select type="text" class="form-control" id="input-function">
			      		<option value="">--Select--</option>
			      		@foreach(\Func::all() as $func)
						<option value="{{$func->id}}" >{{$func->name}}</option>
						@endforeach
			      </select>
			    </div>
			</div>
			<div class="form-group">
				<label for="input-industry" class="col-sm-3 control-label">Industry</label>
			    <div class="col-sm-8">
			      <select type="text" class="form-control" id="input-industry">
			      		<option value="">--Select--</option>
			      		@foreach(\Industry::all() as $industry)
						<option value="{{$industry->id}}" >{{$industry->name}}</option>
						@endforeach
			      </select>
			    </div>
			</div>
			<div class="form-group">
				<label for="input-closing-date" class="col-sm-3 control-label">Closing Date</label>
			    <div class="col-sm-8">
			      <input type="text" class="form-control" id="input-closing-date">
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
<div class="right-side-bar pull-left"></div>
@endsection