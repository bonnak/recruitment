<div class="container body">	
	<div class="clearfix">
		@yield('login')
		@yield('main')
		@yield('candidate')
		@yield('employer')
	</div>
	<script src="{{asset('assets/js/function.js')}}"></script>
</div>