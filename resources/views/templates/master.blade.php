<!DOCTYPE html>
<html>
<head>
	<title>Golden Phoenix</title>
	<link rel="stylesheet" href="{{ mix('css/main.css') }}">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
	@stack('styles')
</head>
<body>
	<div class="pusher">
		<div id="Main">
			@yield("body")
		</div>
	</div>
	@stack('scripts')
</body>
</html>