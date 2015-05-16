@extends('layouts.default') @section('employer')
<div class="left-side-bar pull-left">
	<div>@include('menu.menu')</div>
</div>
{{\Form::open(['route' => ['employer.job-post.delete', Auth::user()->id], 'method' => 'delete', 'class' => 'form-horizontal'])}}
<div id="employer" class="middle-wrapper pull-left">

	<div id="job-list">
		
		<div class="title-bar" align="center"> Jobs List</div>
		<div class="content-wrapper">
			<table class="table table-condensed table-bordered">
				<thead>
					<tr>
						<th><input	type="checkbox" id="chk-delete-jobs" class="chk-delete-job"/></th>
						<th>Title</th>
						<th>Published Date</th>
						<th>Closing Date</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($jobs as $job)
					<tr>					
						<td><input	type="checkbox" name="chk_delete_post[]" class="chk-delete-job" value="{{$job->id}}"/></td>
						<td class="title">{{$job->title}}
							<ul>
								<li><a class="edit-job" href="{{URL::route('employer.job-edit',$job->employer_id)}}/{{$job->id}}">Edit</a></li>
								<li><a class="edit-job" href="{{URL::route('employer.job-view',$job->employer_id)}}/{{$job->id}}">&nbsp;View</a></li>
								<li><input  class="btn-job-delete"  type="submit" value="Delete"></li>
							</ul>
						</td>
						<td>{{date('m-d-Y', strtotime($job->published_date))}}</td>
						<td>{{date('m-d-Y', strtotime($job->closing_date))}}</td>
						<td>
							@if($job->status == 0)
							 	<p>Draft</p>
							@else
								<p>Published</p>							
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
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$jobs->links()}}
		</div>
	</div>
</div>

{{Form::close()}}

<div class="right-side-bar pull-left"></div>
@endsection
