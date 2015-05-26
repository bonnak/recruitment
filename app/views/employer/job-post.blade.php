@extends('layouts.default') 

@section('employer')

<div class="left-side-bar pull-left">

	<div>@include('menu.menu')</div>

</div>
<div id="employer" class="middle-wrapper pull-left">
	<div id="job-post">
		
		<div class="title-bar" align="center">Create New Job</div>
		<div class="content-wrapper">

	 		{{\Form::open(['route' => ['employer.job-post.post', Auth::user()->id], 'method' => 'post', 'class' => 'form-horizontal'])}}
				<div id="title-block" class="block clearfix">
				    <div>
				      <input type="email" class="form-control" id="input-job-title" name="input-job-title" placeholder="Enter your job title here">
				    </div>
				    @if($errors->has())
						<div class="error">								
							{{$errors->first('input-job-title', ':message')}}
						</div>
					@endif
				</div>
				<div id="option-block" class="block clearfix">	
					<h4>Options Selection</h4>	 
					<div>									
						<div class="clearfix">
							<div class="col-sm-6">
								<div class="ctr-group nomargin clearfix pull-left">
									<label for="input-salary-range" class="control-label pull-left">Salary Range</label>
								    <div class="field pull-left">
								      <input type="text" class="form-control" id="input-salary-range" name="input-salary-range">
								    </div>
							    </div>
							</div>
							<div class="col-sm-6">
								<div class="ctr-group clearfix pull-left">
									<label for="input-gender" class="control-label pull-left">Gender</label>
								    <div class="field pull-left">
								      <select type="text" class="form-control" id="input-gender" name="input-gender">
								      	<option value="">--Select--</option>
								      	<option value="M">Male</option>
								      	<option value="F">Female</option>
								      </select>
								    </div>
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix">
						<div class="col-sm-6">
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
						</div>
						<div class="col-sm-6">
							<div class="ctr-group nomargin clearfix pull-left">
								<label for="input-hiring" class="control-label pull-left">Hiring</label>
							    <div class="field pull-left">
							      <input type="text" class="form-control" id="input-hiring" name="input-hiring">
							    </div>
							</div>
						</div>
					</div>
					<div class="clearfix">
						<div class="col-sm-6">
							<div class="ctr-group clearfix pull-left">
								<label for="input-age-range" class="control-label pull-left">Age Range</label>
							    <div class="field pull-left">
							      <input type="text" class="form-control" id="input-age-range" name="input-age-range">
							    </div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="ctr-group clearfix pull-left">
								<label for="input-min-year-exp" class="control-label pull-left">Year Experience</label>
							    <div class="field pull-left">
							      <input type="text" class="form-control" id="input-min-year-exp" name="input-min-year-exp">
							    </div>
							</div>
						</div>
					</div>
					<div class="clearfix">
						<div class="col-sm-6">
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
						</div>
						<div class="col-sm-6">
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
					</div>
				</div>
				<div id="desc-block" class="block clearfix">
					<h4>Description</h4>
				    <div>				    					     
				      	 <textarea id="textarea" name="input-job-description" placeholder="Enter text ..." style="width: 650px; height: 200px;">
				      	 	
				      	 </textarea>				   
				    </div>
				    @if($errors->has())
						<div class="error">								
							{{$errors->first('input-job-description', ':message')}}
						</div>
					@endif
				</div>					
					<div class="block" style="margin-left:-20px;">				
					<div class="clearfix">					
						<div class="clearfix pull-left">
						<div class="col-sm-12">
							<div class="ctr-group clearfix pull-left">
								<label for="input-industry" class="control-label pull-left">Closing Date :</label>
							    <div class="field pull-left">							     
							      	<input style="width:125%;" type="text" class="form-control" name="input-closing-date" id="input-closing-date">							     
							    </div>							   		
								</div>
							</div>						              				               	                 	
		            	</div>
	            	</div>
	            </div><br>			
				<div class="input-group">
				    <div class="col-sm-offset">
				    	<button type="submit" class="btn btn-success" id="btn-publish-job">Publish</button>
				      	<button type="submit" class="btn btn-success save" id="btn-save-job">Save</button>
				    </div>
			  </div>
			{{\Form::close()}}
			<script>
				$('#btn-publish-job').on('click',function(e){
					var form = $(this).parents('form'),
						url = $(form).attr('action');
					e.preventDefault();
					$(form).attr('action', url + '?publish');
					$(form).submit();
				});
				$('#btn-save-job').on('click',function(e){
					var form = $(this).parents('form'),
						url = $(form).attr('action');
					e.preventDefault();
					url = url.replace('publish', '');
					$(form).attr('action', url);
					$(form).submit();
				});
			</script>
		</div>
</div>
<div class="right-side-bar pull-left"></div>

<script>
  $('#textarea').wysihtml5({
	  "stylesheets": ["{{asset('assets/js/lib/wysihtml5/css/wysihtml5.css')}}"], // CSS stylesheets to load
	  "color": true, // enable text color selection
	  "size": 'sm', // buttons size
	  "html": true, // enable button to edit HTML
	  "format-code" : true // enable syntax highlighting
	});
  </script>

<script type="text/javascript" charset="utf-8">
    $(prettyPrint);
</script>
<script type="text/javascript">
	$(function(){
		$( "#input-closing-date").datepicker({dateFormat: 'yy-mm-dd'});
	});
</script>
@endsection