
<head>
	{{ HTML::style('./styles/css/custom.css') }}
	{{ HTML::style('./styles/css/bootstrap.css') }}
	@yield('header')
	<title>{{ $title }}</title>

</head>

<html>
    <body>
		
		 <div class="container">

     	 <div class="masthead">
        	<h3 class="text-muted"> Issue Tracker</h3>
        	<ul class="nav nav-justified">
        	@section('navigation')
	          <li class="active"><a href="#">Projects</a></li>
	          <li><a href="#">Issues</a></li>
	          <li><a href="#">Users</a></li>
	          <li><a href="#">Settings</a></li>
        	@show
        	</ul>
      	</div>
	

	<div class="container">
		@yield('content')
	</div>

	@section('footer')
	<hr class="footer-divider">

	<footer>
		<p>
			©2013 Contra Coding, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a>
		</p>
	</footer>
	@show
	@yield('scripts')
	</body>


</html>

