@extends('layouts.default') 

@section('employer')
<div class="left-side-bar pull-left">
	<div>@include('menu.menu')</div>
</div>
<div id="employer" class="middle-wrapper pull-left">
	<div id="job-post">	
		<div class="content-wrapper">
			<div class="row" >			
				<h2 >Position :&nbsp{{$show_job->title}}&nbsp;<small></small></h2><hr class="style15">
				<div class="jobdescription">
					<h3>Job Description </h3>				
						<p class="content">{{$show_job->job_description}}</p>
				</div>
				<div class="jobdescription">							
						<h3>Job Requirement</h3>									
								<p class="content">{{$show_job->job_description}}</p>									
							
							<ul>				
								<li><p><label>Age</label> :&nbsp;{{$show_job->age_range}}</p></li> 
								<li><p><label>Salary Range</label>:&nbsp;{{$show_job->salary_range}}</p></li>
							</ul>
				</div>															
				<div class="contact">
					<div ><h3>Cantact for more information</h3></div>						
					<ul>		
						<li><p><label><span class="glyphicon glyphicon-earphone"></span>&nbsp;&nbsp;Phone</label> :&nbsp;(855)235 023 888 /92 555 965</p></li>			
						<li><p><label><span class="glyphicon glyphicon-envelope	"></span>&nbsp;&nbsp;Email</label> : &nbsp;info@iatiesgroup.com</p></li>
						<li><p><label><span class="glyphicon glyphicon-map-marker"></span>&nbsp;&nbsp;Website</label> : &nbsp;www.itpool.com.kh</p></li>
						<li><p><label><span class="glyphicon glyphicon-home"></span>&nbsp;&nbsp;Address</label> : &nbsp;Phnom Penh city</p></li>
					</ul>
				</div>
				<div class="profile">
					<div class="companyprofile">								
						<h2>Company profile</h2>
					</div>
					<img class="img-responsive" src="{{ asset('assets/images/profile.jpg') }}" />
					
					<div class="content_profile">
						<p> ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
					</div>
				</div>									
			</div>	
		</div>
	</div>
</div>
<div class="right-side-bar pull-left"></div>
@endsection

