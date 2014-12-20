<div class="container body">
	<div class="row">
		<div class="col-md-2 side-bar-menu">
			<ul class="list-unstyled">
				<li><strong>Browse jobs</strong>
					<ul class="list-unstyled">
						<li role="presentation" class="active"><a href="#category">Categories</a></li>
						<li role="presentation"><a href="#industry">Industries</a></li>
						<li role="presentation"><a href="#location">Locations</a></li>
						<li role="presentation"><a href="#salary">Salaries</a></li>
					</ul></li>
			</ul>
			<ul class="list-unstyled">
				<li><strong>Job seekers</strong>
					<ul class="list-unstyled">
						<li><a href="">Create a Resume</a></li>
						<li><a href="">Search & Apply for a Job</a></li>
						<li><a href="">Job Alerts</a></li>
						<li><a href="">Saved Jobs</a></li>
						<li><a href="">Recommended Jobs</a></li>
					</ul></li>
			</ul>
			<ul class="list-unstyled">
				<li><strong>Employers</strong>
					<ul class="list-unstyled">
						<li><a href="">View CV</a></li>
						<li><a href="">Post job</a></li>
						<li><a href="">Manage job</a></li>
						<li><a href="">Payment Methods</a></li>
					</ul></li>
			</ul>
			<ul class="list-unstyled">
				<li><strong>Career Guide</strong>
					<ul class="list-unstyled">
						<li><a href="">Post a Job</a></li>
						<li><a href="">CV Search</a></li>
						<li><a href="">Purchase Service Packages</a></li>
						<li><a href="">Manage Jobs</a></li>
					</ul></li>
			</ul>
			<ul class="list-unstyled">
				<li><strong>Feature</strong>
					<ul class="list-unstyled">
						<li><a href="">Companies</a></li>
						<li><a href="">Agencies</a></li>
					</ul></li>
			</ul>
		</div>
		<div class="col-md-7">
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



											<li><span class="text"><a
													href="https://camupjob.com/salary-4000">4000 ~ Up</a></span>
												<span class="counter badge"><em>1</em></span></li>



											<li><span class="text"><a
													href="https://camupjob.com/salary-2000">2000 ~ Up</a></span>
												<span class="counter badge"><em>4</em></span></li>



											<li><span class="text"><a
													href="https://camupjob.com/salary-1800">1800 ~ Up</a></span>
												<span class="counter badge"><em>1</em></span></li>



											<li><span class="text"><a
													href="https://camupjob.com/salary-1500">1500 ~ Up</a></span>
												<span class="counter badge"><em>2</em></span></li>



											<li><span class="text"><a
													href="https://camupjob.com/salary-1200">1200 ~ Up</a></span>
												<span class="counter badge"><em>9</em></span></li>



											<li><span class="text"><a
													href="https://camupjob.com/salary-1000">1000 ~ Up</a></span>
												<span class="counter badge"><em>14</em></span></li>



											<li><span class="text"><a
													href="https://camupjob.com/salary-800">800 ~ Up</a></span>
												<span class="counter badge"><em>5</em></span></li>



											<li><span class="text"><a
													href="https://camupjob.com/salary-750">750 ~ Up</a></span>
												<span class="counter badge"><em>1</em></span></li>



											<li><span class="text"><a
													href="https://camupjob.com/salary-700">700 ~ Up</a></span>
												<span class="counter badge"><em>10</em></span></li>



											<li><span class="text"><a
													href="https://camupjob.com/salary-650">650 ~ Up</a></span>
												<span class="counter badge"><em>1</em></span></li>



											<li><span class="text"><a
													href="https://camupjob.com/salary-600">600 ~ Up</a></span>
												<span class="counter badge"><em>8</em></span></li>



											<li><span class="text"><a
													href="https://camupjob.com/salary-500">500 ~ Up</a></span>
												<span class="counter badge"><em>39</em></span></li>



											<li><span class="text"><a
													href="https://camupjob.com/salary-450">450 ~ Up</a></span>
												<span class="counter badge"><em>3</em></span></li>



											<li><span class="text"><a
													href="https://camupjob.com/salary-400">400 ~ Up</a></span>
												<span class="counter badge"><em>18</em></span></li>



											<li><span class="text"><a
													href="https://camupjob.com/salary-350">350 ~ Up</a></span>
												<span class="counter badge"><em>5</em></span></li>



											<li><span class="text"><a
													href="https://camupjob.com/salary-320">320 ~ Up</a></span>
												<span class="counter badge"><em>1</em></span></li>



											<li><span class="text"><a
													href="https://camupjob.com/salary-300">300 ~ Up</a></span>
												<span class="counter badge"><em>37</em></span></li>



											<li><span class="text"><a
													href="https://camupjob.com/salary-250">250 ~ Up</a></span>
												<span class="counter badge"><em>17</em></span></li>



											<li><span class="text"><a
													href="https://camupjob.com/salary-200">200 ~ Up</a></span>
												<span class="counter badge"><em>62</em></span></li>



											<li><span class="text"><a
													href="https://camupjob.com/salary-180">180 ~ Up</a></span>
												<span class="counter badge"><em>3</em></span></li>



											<li><span class="text"><a
													href="https://camupjob.com/salary-160">160 ~ Up</a></span>
												<span class="counter badge"><em>3</em></span></li>



											<li><span class="text"><a
													href="https://camupjob.com/salary-150">150 ~ Up</a></span>
												<span class="counter badge"><em>34</em></span></li>



											<li><span class="text"><a
													href="https://camupjob.com/salary-140">140 ~ Up</a></span>
												<span class="counter badge"><em>1</em></span></li>



											<li><span class="text"><a
													href="https://camupjob.com/salary-130">130 ~ Up</a></span>
												<span class="counter badge"><em>1</em></span></li>



											<li><span class="text"><a
													href="https://camupjob.com/salary-120">120 ~ Up</a></span>
												<span class="counter badge"><em>11</em></span></li>



											<li><span class="text"><a
													href="https://camupjob.com/salary-110">110 ~ Up</a></span>
												<span class="counter badge"><em>3</em></span></li>



											<li><span class="text"><a
													href="https://camupjob.com/salary-100">100 ~ Up</a></span>
												<span class="counter badge"><em>7</em></span></li>



											<li><span class="text"><a
													href="https://camupjob.com/salary-90">90 ~ Up</a></span> <span
												class="counter badge"><em>1</em></span></li>



											<li><span class="text"><a
													href="https://camupjob.com/salary-80">80 ~ Up</a></span> <span
												class="counter badge"><em>3</em></span></li>



											<li><span class="text"><a
													href="https://camupjob.com/salary-Negotiable">Negotiable</a></span>
												<span class="counter badge"><em>327</em></span></li>



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
						<div class="view-name">
							<strong>Recent job posts >></strong>
						</div>
						<div class="job-posts">
							<div class="job-post">
								<ul class="list-unstyled">
									<li><a href="" class="job-title"><h3>Quotation and Project
												Study</h3></a>
										<div class="employer">
											<small>Inter Smart Cambodia Co.,Ltd</small>
										</div>
										<div>
											<small>Closing date: <span class="closing-date">12/September/2014</span></small><span
												class="separator">|</span> <small>Location: <span
												class="location">Phnom Penh</span></small><span
												class="separator">|</span> <small>Salary: <span
												class="salary">Negotiable</span></small>
										</div></li>
								</ul>
							</div>
							<hr class="post-seperator">
							<div class="job-post">
								<ul class="list-unstyled">
									<li><a href="" class="job-title"><h3>Courier
												(បុគ្គលិកផ្នែកបញ្ជូនសំបុត្រ និងទំនិញ)</h3></a>
										<div class="employer">
											<small>Inter Smart Cambodia Co.,Ltd</small>
										</div>
										<div>
											<small>Closing date: <span class="closing-date">12/September/2014</span></small><span
												class="separator">|</span> <small>Location: <span
												class="location">Phnom Penh</span></small><span
												class="separator">|</span> <small>Salary: <span
												class="salary">Negotiable</span></small>
										</div></li>
								</ul>
							</div>
							<hr class="post-seperator">
							<div class="job-post">
								<ul class="list-unstyled">
									<li><a href="" class="job-title"><h3>Marketing (Many Positions)</h3></a>
										<div class="employer">
											<small>Inter Smart Cambodia Co.,Ltd</small>
										</div>
										<div>
											<small>Closing date: <span class="closing-date">12/September/2014</span></small><span
												class="separator">|</span> <small>Location: <span
												class="location">Phnom Penh</span></small><span
												class="separator">|</span> <small>Salary: <span
												class="salary">Negotiable</span></small>
										</div></li>
								</ul>
							</div>
							<hr class="post-seperator">
							<div class="job-post">
								<ul class="list-unstyled">
									<li><a href="" class="job-title"><h3>Quotation and Project
												Study</h3></a>
										<div class="employer">
											<small>Inter Smart Cambodia Co.,Ltd</small>
										</div>
										<div>
											<small>Closing date: <span class="closing-date">12/September/2014</span></small><span
												class="separator">|</span> <small>Location: <span
												class="location">Phnom Penh</span></small><span
												class="separator">|</span> <small>Salary: <span
												class="salary">Negotiable</span></small>
										</div></li>
								</ul>
							</div>
							<hr class="post-seperator">
							<div class="job-post">
								<ul class="list-unstyled">
									<li><a href="" class="job-title"><h3>Courier
												(បុគ្គលិកផ្នែកបញ្ជូនសំបុត្រ និងទំនិញ)</h3></a>
										<div class="employer">
											<small>Inter Smart Cambodia Co.,Ltd</small>
										</div>
										<div>
											<small>Closing date: <span class="closing-date">12/September/2014</span></small><span
												class="separator">|</span> <small>Location: <span
												class="location">Phnom Penh</span></small><span
												class="separator">|</span> <small>Salary: <span
												class="salary">Negotiable</span></small>
										</div></li>
								</ul>
							</div>
							<hr class="post-seperator">
							<div class="job-post">
								<ul class="list-unstyled">
									<li><a href="" class="job-title"><h3>Marketing (Many Positions)</h3></a>
										<div class="employer">
											<small>Inter Smart Cambodia Co.,Ltd</small>
										</div>
										<div>
											<small>Closing date: <span class="closing-date">12/September/2014</span></small><span
												class="separator">|</span> <small>Location: <span
												class="location">Phnom Penh</span></small><span
												class="separator">|</span> <small>Salary: <span
												class="salary">Negotiable</span></small>
										</div></li>
								</ul>
							</div>
							<hr class="post-seperator">
							<div class="job-post">
								<ul class="list-unstyled">
									<li><a href="" class="job-title"><h3>Quotation and Project
												Study</h3></a>
										<div class="employer">
											<small>Inter Smart Cambodia Co.,Ltd</small>
										</div>
										<div>
											<small>Closing date: <span class="closing-date">12/September/2014</span></small><span
												class="separator">|</span> <small>Location: <span
												class="location">Phnom Penh</span></small><span
												class="separator">|</span> <small>Salary: <span
												class="salary">Negotiable</span></small>
										</div></li>
								</ul>
							</div>
							<hr class="post-seperator">
							<div class="job-post">
								<ul class="list-unstyled">
									<li><a href="" class="job-title"><h3>Courier
												(បុគ្គលិកផ្នែកបញ្ជូនសំបុត្រ និងទំនិញ)</h3></a>
										<div class="employer">
											<small>Inter Smart Cambodia Co.,Ltd</small>
										</div>
										<div>
											<small>Closing date: <span class="closing-date">12/September/2014</span></small><span
												class="separator">|</span> <small>Location: <span
												class="location">Phnom Penh</span></small><span
												class="separator">|</span> <small>Salary: <span
												class="salary">Negotiable</span></small>
										</div></li>
								</ul>
							</div>
							<hr class="post-seperator">
							<div class="job-post">
								<ul class="list-unstyled">
									<li><a href="" class="job-title"><h3>Marketing (Many Positions)</h3></a>
										<div class="employer">
											<small>Inter Smart Cambodia Co.,Ltd</small>
										</div>
										<div>
											<small>Closing date: <span class="closing-date">12/September/2014</span></small><span
												class="separator">|</span> <small>Location: <span
												class="location">Phnom Penh</span></small><span
												class="separator">|</span> <small>Salary: <span
												class="salary">Negotiable</span></small>
										</div></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div id="premium-job">
				<div class="row">
					<div class="col-md-12">
						<div class="panel panel-default">
							<div class="panel-heading">
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
							<div class="panel-heading">
								<h3 class="panel-title">Urgent Jobs</h3>
							</div>
							<div class="panel-body">
								<ul class="list-group list-group-unstyle">
									<li class="list-group-item"><a href="">业务经理 </a></li>
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
	</div>
</div>