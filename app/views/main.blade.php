@extends('layouts.default')

@section('main')
		<div class="col-md-2 left-side-bar">
			<ul class="list-unstyled">
				<li><h3 class="title">Browse jobs</h3>
					<ul class="list-unstyled">
						<li role="presentation" class="active"><a href="#category">Categories</a><hr class="menu-seperator"></li>
						<li role="presentation"><a href="#industry">Industries</a><hr class="menu-seperator"></li>
						<li role="presentation"><a href="#location">Locations</a><hr class="menu-seperator"></li>
						<li role="presentation"><a href="#salary">Salaries</a><hr class="menu-seperator"></li>
					</ul></li>
			</ul>
			<ul class="list-unstyled">
				<li><h3 class="title">Job seekers</h3>
					<ul class="list-unstyled">
						<li><a href="">Create a Resume</a><hr class="menu-seperator"></li>
						<li><a href="">Search & Apply for a Job</a><hr class="menu-seperator"></li>
						<li><a href="">Job Alerts</a><hr class="menu-seperator"></li>
						<li><a href="">Saved Jobs</a><hr class="menu-seperator"></li>
						<li><a href="">Recommended Jobs</a><hr class="menu-seperator"></li>
					</ul></li>
			</ul>
			<ul class="list-unstyled">
				<li><h3 class="title">Employers</h3>
					<ul class="list-unstyled">
						<li><a href="">View CV</a><hr class="menu-seperator"></li>
						<li><a href="">Post job</a><hr class="menu-seperator"></li>
						<li><a href="">Manage job</a><hr class="menu-seperator"></li>
						<li><a href="">Payment Methods</a><hr class="menu-seperator"></li>
					</ul></li>
			</ul>
			<ul class="list-unstyled">
				<li><h3 class="title">Career Guide</h3>
					<ul class="list-unstyled">
						<li><a href="">Post a Job</a><hr class="menu-seperator"></li>
						<li><a href="">CV Search</a><hr class="menu-seperator"></li>
						<li><a href="">Purchase Service Packages</a><hr class="menu-seperator"></li>
						<li><a href="">Manage Jobs</a><hr class="menu-seperator"></li>
					</ul></li>
			</ul>
			<ul class="list-unstyled">
				<li><h3 class="title">Feature</h3>
					<ul class="list-unstyled">
						<li><a href="">Companies</a><hr class="menu-seperator"></li>
						<li><a href="">Agencies</a><hr class="menu-seperator"></li>
					</ul></li>
			</ul>
		</div>
		<div class="col-md-7 middle-wrapper">
			<div class="row">
				<div class="col-md-12">
					<div id="browse-jobs">
						<div class="row">
							<div class="col-md-12">
								<ul class="nav nav-tabs nav-justified" id="browse-jobs-tab">
									<li role="presentation" data-toggle="tab" class="active"><a
										href="#category">Categories</a></li>
									<li role="presentation" data-toggle="tab"><a href="#industry">Industries</a></li>
									<li role="presentation" data-toggle="tab"><a href="#location">Locations</a></li>
									<li role="presentation" data-toggle="tab"><a href="#salary">Salaries</a></li>
								</ul>
								<div class="tab-content">
									<div class="tab-pane active" id="category">
										<ul>
											@foreach($functions as $func)
												<li>
													<span class="text">
													<a href="https://camupjob.com/category-1-accounting+financial">{{$func->name}}</a></span> 
													<span class="counter badge"><em>80</em></span>
												</li>
											@endforeach
										</ul>
									</div>
									<div class="tab-pane" id="industry">
										<ul>
											@foreach($industries as $industry)
												<li>
													<span class="text">
													<a href="https://camupjob.com/industry-2-advertising+media+publishing">{{$industry->name}}</a></span> 
													<span class="counter badge"><em>1</em></span>
												</li>
											@endforeach
										</ul>
									</div>
									<div class="tab-pane" id="location">
										<ul>
											@foreach($locations as $location)
												<li>
													<span class="text">
													<a href="https://camupjob.com/location-1-phnom-penh">{{$location->name}}</a>
													</span> <span class="counter badge"><em>576</em></span>
												</li>
											@endforeach
										</ul>
									</div>
									<div class="tab-pane" id="salary">
										<ul>
											@foreach($salaries as $salary)
												<li>
													<span class="text">
													<a href="https://camupjob.com/salary-4000">${{$salary->min}} - {{!$salary->max ? 'Up' : '$' . $salary->max}}</a></span>
													<span class="counter badge"><em>1</em></span>
												</li>
											@endforeach
										</ul>
									</div>
									<script>
										$('#browse-jobs-tab a').click(function (e) {
								  			e.preventDefault();
								  			$(this).tab('show');
										});
									</script>
								</div>
							</div>
						</div>
					</div>
					<div class="content-wrapper">
						<div class="view-name title-bar">
							<strong>Job Posts</strong>
						</div>
						<div class="job-posts">
							<div class="job-post">
								<ul class="list-unstyled">
									<li><a href="" class="job-title"><h3>Quotation and Project
												Study</h3></a>
										<div class="clearfix">
											<div class="employer">
												<img src="{{asset('assets/images/company-logos/1.png')}}" style="width: 82px;"> 
												<small>Inter Smart Cambodia Co.,Ltd</small>
											</div>
											<div style="margin-top: 5px; font-style: italic;">
												<small>Closing date: <span class="closing-date" style="color: red; font-weight: bold">12-Sep-2014</span></small><span class="separator">|</span>
												<small>Location: <span class="location">Phnom Penh</span></small><span class="separator">|</span> 
												<small>Salary: <span class="salary">Negotiable</span></small>
											</div>
										</div>
									</li>
								</ul>
							</div>
							<hr class="post-seperator">
							<div class="job-post">
								<ul class="list-unstyled">
									<li><a href="" class="job-title"><h3>Quotation and Project
												Study</h3></a>
										<div class="clearfix">
											<div class="employer">
												<img src="{{asset('assets/images/company-logos/1.png')}}" style="width: 82px;"> 
												<small>Inter Smart Cambodia Co.,Ltd</small>
											</div>
											<div style="margin-top: 5px; font-style: italic;">
												<small>Closing date: <span class="closing-date" style="color: red; font-weight: bold">12-Sep-2014</span></small><span class="separator">|</span>
												<small>Location: <span class="location">Phnom Penh</span></small><span class="separator">|</span> 
												<small>Salary: <span class="salary">Negotiable</span></small>
											</div>
										</div>
									</li>
								</ul>
							</div>
							<hr class="post-seperator">
							<div class="job-post">
								<ul class="list-unstyled">
									<li><a href="" class="job-title"><h3>Quotation and Project
												Study</h3></a>
										<div class="clearfix">
											<div class="employer">
												<img src="{{asset('assets/images/company-logos/1.png')}}" style="width: 82px;"> 
												<small>Inter Smart Cambodia Co.,Ltd</small>
											</div>
											<div style="margin-top: 5px; font-style: italic;">
												<small>Closing date: <span class="closing-date" style="color: red; font-weight: bold">12-Sep-2014</span></small><span class="separator">|</span>
												<small>Location: <span class="location">Phnom Penh</span></small><span class="separator">|</span> 
												<small>Salary: <span class="salary">Negotiable</span></small>
											</div>
										</div>
									</li>
								</ul>
							</div>
							<hr class="post-seperator">
							<div class="job-post">
								<ul class="list-unstyled">
									<li><a href="" class="job-title"><h3>Quotation and Project
												Study</h3></a>
										<div class="clearfix">
											<div class="employer">
												<img src="{{asset('assets/images/company-logos/1.png')}}" style="width: 82px;"> 
												<small>Inter Smart Cambodia Co.,Ltd</small>
											</div>
											<div style="margin-top: 5px; font-style: italic;">
												<small>Closing date: <span class="closing-date" style="color: red; font-weight: bold">12-Sep-2014</span></small><span class="separator">|</span>
												<small>Location: <span class="location">Phnom Penh</span></small><span class="separator">|</span> 
												<small>Salary: <span class="salary">Negotiable</span></small>
											</div>
										</div>
									</li>
								</ul>
							</div>
							<hr class="post-seperator">
							<div class="job-post">
								<ul class="list-unstyled">
									<li><a href="" class="job-title"><h3>Quotation and Project
												Study</h3></a>
										<div class="clearfix">
											<div class="employer">
												<img src="{{asset('assets/images/company-logos/1.png')}}" style="width: 82px;"> 
												<small>Inter Smart Cambodia Co.,Ltd</small>
											</div>
											<div style="margin-top: 5px; font-style: italic;">
												<small>Closing date: <span class="closing-date" style="color: red; font-weight: bold">12-Sep-2014</span></small><span class="separator">|</span>
												<small>Location: <span class="location">Phnom Penh</span></small><span class="separator">|</span> 
												<small>Salary: <span class="salary">Negotiable</span></small>
											</div>
										</div>
									</li>
								</ul>
							</div>
							<hr class="post-seperator">
							<div class="job-post">
								<ul class="list-unstyled">
									<li><a href="" class="job-title"><h3>Quotation and Project
												Study</h3></a>
										<div class="clearfix">
											<div class="employer">
												<img src="{{asset('assets/images/company-logos/1.png')}}" style="width: 82px;"> 
												<small>Inter Smart Cambodia Co.,Ltd</small>
											</div>
											<div style="margin-top: 5px; font-style: italic;">
												<small>Closing date: <span class="closing-date" style="color: red; font-weight: bold">12-Sep-2014</span></small><span class="separator">|</span>
												<small>Location: <span class="location">Phnom Penh</span></small><span class="separator">|</span> 
												<small>Salary: <span class="salary">Negotiable</span></small>
											</div>
										</div>
									</li>
								</ul>
							</div>
							<hr class="post-seperator">
							<div class="job-post">
								<ul class="list-unstyled">
									<li><a href="" class="job-title"><h3>Quotation and Project
												Study</h3></a>
										<div class="clearfix">
											<div class="employer">
												<img src="{{asset('assets/images/company-logos/1.png')}}" style="width: 82px;"> 
												<small>Inter Smart Cambodia Co.,Ltd</small>
											</div>
											<div style="margin-top: 5px; font-style: italic;">
												<small>Closing date: <span class="closing-date" style="color: red; font-weight: bold">12-Sep-2014</span></small><span class="separator">|</span>
												<small>Location: <span class="location">Phnom Penh</span></small><span class="separator">|</span> 
												<small>Salary: <span class="salary">Negotiable</span></small>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3 right-side-bar">
			<div id="premium-job">
				<div class="row">
					<div class="col-md-12">
						<div class="panel panel-default">
							<div class="panel-heading title-bar">
								<h3 class="panel-title">Premium Jobs</h3>
							</div>
							<div class="panel-body">
								<ul class="list-group list-group-unstyle">
									<li class="list-group-item"><a href="">Project Manager (IT)</a></li>
									<li class="list-group-item"><a href="">Accounting Manager</a></li>
									<li class="list-group-item"><a href="">Civil Engineer in Thai
											Langage</a></li>
									<li class="list-group-item"><a href="">Sales for TV (Sponsor
											Finder)</a></li>
									<li class="list-group-item"><a href="">Credit Manager</a></li>
									<li class="list-group-item"><a href="">Project Manager (IT)</a></li>
									<li class="list-group-item"><a href="">Accounting Manager</a></li>
									<li class="list-group-item"><a href="">Civil Engineer in Thai
											Langage</a></li>
									<li class="list-group-item"><a href="">Sales for TV (Sponsor
											Finder)</a></li>
									<li class="list-group-item"><a href="">Credit Manager</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="urgent-job">
				<div class="row">
					<div class="col-md-12">
						<div class="panel panel-default">
							<div class="panel-heading title-bar">
								<h3 class="panel-title">Urgent Jobs</h3>
							</div>
							<div class="panel-body">
								<ul class="list-group list-group-unstyle">
									<li class="list-group-item"><a href="">ä¸šåŠ¡ç»�ç�† </a></li>
									<li class="list-group-item"><a href="">SOCIAL COMPLIANCE
											AUDITOR</a></li>
									<li class="list-group-item"><a href="">Agronomist</a></li>
									<li class="list-group-item"><a href="">Accounting Manager</a></li>
									<li class="list-group-item"><a href="">HOT: Hiring 10 Web
											Developers</a></li>
									<li class="list-group-item"><a href="">Project Manager (IT)</a></li>
									<li class="list-group-item"><a href="">Accounting Manager</a></li>
									<li class="list-group-item"><a href="">Civil Engineer in Thai
											Langage</a></li>
									<li class="list-group-item"><a href="">Sales for TV (Sponsor
											Finder)</a></li>
									<li class="list-group-item"><a href="">Credit Manager</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection