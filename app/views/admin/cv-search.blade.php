@extends('layouts.default') 

@section('employer')

<div class="left-side-bar pull-left">

	<div>@include('menu.menu')</div>

</div>
<div id="employer" class="middle-wrapper pull-left">
	<div id="job-post">
		
		<div class="title-bar" align="center">Create New Job</div>
		<div class="content-wrapper">

	 		{{\Form::open(['route' => ['employer', Auth::user()->id], 'method' => 'post', 'class' => 'form-horizontal'])}}
				<div id="title-block" class="block clearfix">
				    <div class="col-md-9">
				      <input type="email" class="form-control" id="input-job-title" name="input-job-title" placeholder="Input key words">
				      <input type="submit" class="btn btn-success">
				    </div>				   
				</div>
				
			{{\Form::close()}}
		</div>
	</div>  
<div class="right-side-bar pull-left"></div>

@endsection