@extends('layouts.admin') @section('content')
<div class="row">
	<div class="col-md-8"></div>
	<div class="col-md-4">
		<div id="search-back"></div>
		<div id="search">
			<form action="">
				<div class="input-element">
					<input type="text" class="form-control" placeholder="Keyword">
				</div>
				<div class="input-element">
					<select class="form-control">
						<option>Select function</option>
						<option>1</option>
						<option>1</option>
						<option>1</option>
					</select>
				</div>
				<div class="input-element">
					<select class="form-control">
						<option>Select location</option>
						<option>1</option>
						<option>1</option>
						<option>1</option>
					</select>
				</div>
				<div class="input-element" style="text-align: center;">
					<button class="btn btn-default" id="btn-search" type="submit">Search</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection
