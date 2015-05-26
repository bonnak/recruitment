@extends('layouts.default') @section('employer')
<div class="left-side-bar pull-left">
	<div>@include('menu.menu')</div>
</div>
{{\Form::open([ 'method' => 'delete', 'class' => 'form-horizontal'])}}
<div id="employer" class="middle-wrapper pull-left">

	<div id="job-list">
		
		<div class="title-bar" align="center"> Jobs List</div>
		<div class="content-wrapper">
			<table class="table">
				<thead>
					<tr>
						<th><input	type="checkbox" id="chk-delete-jobs" class="chk-delete-job"/></th>
						<th>Candidate</th>
						<th>Job Title</th>
						<th>Applied Date</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					@foreach($applied as $job)
					<tr>					
						<td><input	type="checkbox" name="chk_delete_post[]" class="chk-delete-job" value="{{$job->id}}"/></td>
						<td class="title"><span>{{$job->candidate_name}}</span>
							<ul>
								<li>Edit</li>
								<li>View</li>
								<li><input  class="btn-job-delete"  type="submit" value="Delete"></li>
							</ul>
						</td>
						<td>{{$job->job_title}}</td>
						<td>{{date('m-d-Y', strtotime($job->applied_date))}}</td>
						<td>
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
			<div  class="input-group-1">
				<label><input name="chk-delete-jobs" type="submit" value="Delete"  class="btn btn-danger btn-jobs-delete "></label>
			</div>
		</div>
		<div class="input-group">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</div>
	</div>
</div>

{{Form::close()}}

<div class="right-side-bar pull-left"></div>
<script type="text/javascript" src="{{asset('assets/js/job_list.js')}}"></script>
@endsection
