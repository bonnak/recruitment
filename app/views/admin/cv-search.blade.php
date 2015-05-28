@extends('layouts.default') 

@section('employer')

<div class="left-side-bar pull-left">

	<div>@include('menu.menu')</div>

</div>
<div id="employer" class="middle-wrapper pull-left">
	<div id="job-post">
		
		<div class="title-bar" align="center">Search Job</div>
		<div class="content-wrapper">

	 		{{\Form::open(['route' => ['employer.cv.get-search', Auth::user()->id], 'method' => 'post', 'class' => 'form-horizontal'])}}
				<div id="title-block" class=" clearfix">
				    <div class="col-md-10 pull-left">
				      <input type="text" class="form-control" id="input-job-title" name="keyword" placeholder="Input key words for search job">
				    </div>				   
				    <div class="pull-left">
				    	<input class="btn btn-success" type="submit" value="Search">
				    </div>
				</div><hr>
				<h2>Your search result 	:&nbsp;&nbsp;<samp class="alert-warning">{{$keyword}}</samp> </h2>	
				<table>
					@foreach($cv_title as $title)				
						<div class="row">
							<div class="col-sm-12">
								<div class="thumbnail">								 	 
									<div class="caption">
									    <h3><a href="#"> {{$title->title}}</a></h3>
									    <p>{{$title->summary}}</p>
									    <p class="pull-left"><a href="#">View</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Download</a></p>
									   	<ul class="nav pull-right">
									   		<li><span class="nav nav-bar-left">Created Date: {{date('Y-M-d', strtotime($title->created_at))}}</span></li>
									   	</ul><br>								   
									</div>
								</div>
							</div>
						</div>				
					@endforeach
				</table>			
			{{\Form::close()}}
			{{$cv_title->links()}}
		</div>
	</div>  
<div class="right-side-bar pull-left"></div>

@endsection