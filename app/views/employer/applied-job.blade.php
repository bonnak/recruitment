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
								<th colspan="2">
									<div class="input-group search-applied-list">
										<div class="pull-left input-group">
											<input type="text" name="input-search" class="form-control input-sm input-search-applied" style=" font-size:12px;  height:25px; padding:4px;" name="search-applied-list">
										</div>
										<div class="pull-left input-group">
											&nbsp;<input type="submit" name="search-applied" class="btn btn-default input-sm " id="search-applied" value="Search" style="height:25px; padding:2px 8px; margin:1px;">
										</div>
									</div>
								</th>
								
								<th colspan="2">									
									<div class="input-group filter-applied-list">
										<div class="pull-left">
											<select name="filter" class="form-control input-sm" style=" font-size:12px;  height:25px; padding:4px; top:4px;"> 
												<option value="">--All--</option>										
												<option value="0" {{is_numeric($filter	) && $filter == 0 ? 'selected' : ''}}>Inactive</option>
												<option value="1" {{is_numeric($filter) && $filter == 1 ? 'selected' : ''}}>Active</option>
											</select>
										</div>									
										<div class="pull-left ">
											&nbsp;<input style="height:25px; width:52px; padding:1px; margin:1px; top:3px;" type="submit" class="btn btn-default input-sm" value="Filter"> 
										</div>
									</div>
								</th>
							</tr>			
							<tr>						
								<th>Candidate</th>
								<th>Job Title</th>
								<th>Applied Date</th>
								<th colspan="2" align="center"> Status</th>
								
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
