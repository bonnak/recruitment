@extends('layouts.default') 

@section('employer')
<div class="left-side-bar pull-left">
	<div>@include('menu.menu')</div>
</div>
<div id="employer" class="middle-wrapper pull-left">
	<div id="job-post">
		@include('menu.message')
		<div class="title-bar" align="center">Update Job</div>
		<div class="content-wrapper">
			{{\Form::open(['route' => ['employer.job-edit.edit', Auth::user()->id], 'method' => 'PUT', 'class' => 'form-horizontal'])}}
				<div id="title-block" class="block clearfix">
					<input type="hidden" name="id" value="{{$job_edit->id}}">
				    <div>
				      <input type="text" value="{{$job_edit->title}}" class="form-control" id="input-job-title" name="input-job-title">
		 		    </div>
				</div>
				<div id="option-block" class="block clearfix">	
					<h4>Options Selection</h4>	
					<div>									
						<div class="clearfix">
							<div class="col-sm-6">
								<div class="ctr-group nomargin clearfix pull-left">
									<label for="input-salary-range" class="control-label pull-left">Salary Range</label>
								    <div class="field pull-left">
								      <input type="text" name="input-salary-range" value="{{$job_edit->salary_range}}"  class="form-control" id="input-salary-range">
								    </div>
							    </div>
							</div>
							<div class="col-sm-6">
								<div class="ctr-group clearfix pull-left">
									<label for="input-gender" class="control-label pull-left">Gender</label>
								    <div class="field pull-left">
								      <select type="text" class="form-control" id="input-gender" name="input-gender">								      	
							      		<option value="">---Select---</option>
							      		@foreach(\Gender::getSexes() as $gender)
										<option value="{{$gender->id}}" {{$job_edit->gender === $gender->id ? 'selected' : ''}}>{{$gender->sex}}</option>
										@endforeach
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
							      		<option value="">---Select---</option>
							      		@foreach(\Degree::all() as $degree)
										<option value="{{$degree->id}}" {{$job_edit->qualification_id === $degree->id ? 'selected' : ''}}>{{$degree->description}}</option>
										@endforeach
							      </select>
							    </div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="ctr-group nomargin clearfix pull-left">
								<label for="input-hiring" class="control-label pull-left">Hiring</label>
							    <div class="field pull-left">
							      <input type="text" value="{{$job_edit->hiring}}" class="form-control" id="input-hiring" name="input-hiring">
							    </div>
							</div>
						</div>
					</div>
					<div class="clearfix">
						<div class="col-sm-6">
							<div class="ctr-group clearfix pull-left">
								<label for="input-age-range" class="control-label pull-left">Age Range</label>
							    <div class="field pull-left">
							      <input type="text" value="{{$job_edit->age_range}}" class="form-control" id="input-age-range" name="input-age-range">
							    </div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="ctr-group clearfix pull-left">
								<label for="input-min-year-exp" class="control-label pull-left">Year Experience</label>
							    <div class="field pull-left">
							      <input type="text" value="{{$job_edit->min_year_exp}}" class="form-control" id="input-min-year-exp" name="input-min-year-exp">
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
							      		<option value="">--select--</option>
							      		@foreach(\Func::getFunctions() as $func)
										<option value="{{$func->id}}" {{$job_edit->function_id === $func->id ? 'selected' : ''}} >{{$func->name}}</option>
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
							      		<option value="">--select--</option>
							      		@foreach(\Industry::getIndustries() as $industry)
										<option value="{{$industry->id}}" {{$job_edit->industry_id === $industry->id ? 'selected' : ''}} >{{$industry->name}}</option>
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
				      	 <textarea class="textarea" name="input-job-description" placeholder="Enter text ..." style="width: 600px; height: 200px;">
				      	 	{{$job_edit->job_description}}				    
				      	 </textarea>				   
				    </div>
				</div>					
				<div class="block">				
					<div class="clearfix">					
						<div class="clearfix pull-left">
						<div class="col-md-7">
							<div class="form-group">
				                <div class='input-group date' >
				                	<span class="input-group-addon">
				                	 Closing Date
				                	</span>				                	
				                    <input type="text" value="{{$job_edit->closing_date}}" class="form-control" name="input-closing-date" id="datepicker">				                   			                   
				                </div>			                 	
				            </div>	
				        </div>												
						</div>						
					</div>
				</div><br>				
				<div class="form-group">
			    <div class="col-sm-offset col-sm-10">
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
</div>
<div class="right-side-bar pull-left"></div>
@endsection

@section('script')
<script>
    $('.textarea').wysihtml5();
</script>

<script type="text/javascript" charset="utf-8">
    $(prettyPrint);
</script>
  <script>
  $(function() {
    $( "#datepicker" ).datepicker({dateFormat: "yy-mm-dd"});
  });
  </script>
@endsection