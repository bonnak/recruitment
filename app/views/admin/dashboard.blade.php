@extends('layouts.admin') @section('home')
<div class="row" id="dashboard" ng-app="IndustryApp"
	ng-controller="IndustryController">
	<div class="col-sm-6">
		<div class="panel panel-default" id="industry">
			<div class="panel-heading">
				<h3 class="panel-title">Industry</h3>
			</div>
			<div class="panel-body">
				<ul class="list-unstyled">
					<li ng-repeat="industry in industries.getElements()"><br>
						<div style="flex: 1 50%;">
							<span class="title"><% industry.name %></span>
							<input type="text"
								class="form-control title hide" id="txt-industry" one style="width: 80%;"
								value="<%industry.name %>">
						</div>
						<div>
							<a class="btn btn-success" id="btn-edit" onclick="btn_edit_click(this)"><span class="glyphicon glyphicon-edit"></span></a>
							<a class="btn btn-danger" ng-click="industry.delete()"><span
								class="glyphicon glyphicon-remove"></span></a>
						</div></li>
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
