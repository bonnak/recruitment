@extends('layouts.default') @section('employer')
<div class="left-side-bar pull-left">
	<div>@include('menu.menu')</div>
</div>
{{\Form::open(['route'=>['employer.applied-job', Auth::user()->id ], 'method' => 'post', 'class' => 'form-horizontal'])}}
	<div id="employer" class="middle-wrapper pull-left">
		<div id="job-list">
			<div class="title-bar" align="center"> Jobs List</div>
				<div class="content-wrapper">		
					<table class="table table-triped">
						<thead>				
							<tr>						
								<th>Candidate</th>
								<th>Job Title</th>
								<th>Applied Date</th>
								<th>Status</th>
								<th>
									<div class="pull-left">
									<select name="filter" class="form-control" style=" font-size:12px;  height:25px; padding:4px;"> 
										<option> -- none--</option>
										<option value="0">Inaction</option>
										<option value="1">action</option>
									</select>
									</div>&nbsp;
									<div class="pull-left">
										<input style="height:25px; width:55px; padding:4px;" type="submit" class="btn btn-default" value="Filter"> 
									</div>
								</th>
							</tr>
						</thead>
						<tbody>
							@foreach($applied as $job)
							<tr>						
								<td class="title"><a href=""><span>{{$job->candidate_name}}</span></a>								</td>
								<td>{{$job->job_title}}</td>
								<td>{{date('m-d-Y', strtotime($job->applied_date))}}</td>
								<td colspan="7" align="center">
									@if($job->status == 0)
									 	<p>Inactive</p>
									@else
										<p>Active</p>							
									@endif
								</td>
							</tr>
							@endforeach						
						</tbody>					
					</table>			
					<hr style="border:solid 1px lavender;">
					<div  class="input-group-1">
						<label><input name="" value="Filter"  class="btn btn-danger btn-jobs-delete "></label>
					</div>
				</div>
			<div class="input-group">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$applied->links()}}
			</div>
		</div>
	</div>
{{Form::close()}}

<div class="right-side-bar pull-left"></div>
<script type="text/javascript" src="{{asset('assets/js/job_list.js')}}"></script>
@endsection
