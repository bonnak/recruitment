@extends('layouts.admin') @section('home')
<div class="row" id="dashboard">
	<div class="col-sm-6">
		<div class="panel panel-default" id="industry">
			<div class="panel-heading">
				<h3 class="panel-title">Industry</h3>
			</div>
			<div class="panel-body">
				<ul class="list-unstyled">
					<li>
						<span style="flex:1;">Accounting/Audit/Tax Services</span> 
						<div><a class="btn btn-success"><span class="glyphicon glyphicon-edit"></span></a>
						<a class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a></div>
						
					</li>
					<li>
						<span style="flex:1;">Banking &amp; Finance</span> 
						<div><a class="btn btn-success"><span class="glyphicon glyphicon-edit"></span></a>
						<a class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a></div>
						
					</li>
					<li>
						<span style="flex:1;">Architecture/Building/Construction</span> 
						<div><a class="btn btn-success"><span class="glyphicon glyphicon-edit"></span></a>
						<a class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a></div>
						
					</li>
					<li>
						<span style="flex:1;">Catering</span> 
						<div><a class="btn btn-success"><span class="glyphicon glyphicon-edit"></span></a>
						<a class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a></div>
						
					</li>
					<li>
						<span style="flex:1;">Chemical/Plastic/Paper/Petrochemical</span> 
						<div><a class="btn btn-success"><span class="glyphicon glyphicon-edit"></span></a>
						<a class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a></div>
						
					</li>
					<li>
						<span style="flex:1;">Civil Services</span> 
						<div><a class="btn btn-success"><span class="glyphicon glyphicon-edit"></span></a>
						<a class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a></div>
						
					</li>
				</ul>
				<form>
					<div class="form-group" style="margin-bottom: 0; margin-top: 18px;">
						<input type="text" class="form-control"
							style="display: inline-block; width: 77%; margin-right: 5px;"> <a
							class="btn btn-info">Add New</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="col-sm-6">
		<form action=""></form>
	</div>
</div>
@endsection
