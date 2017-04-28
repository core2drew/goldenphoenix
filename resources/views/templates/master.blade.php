<!DOCTYPE html>
<html ng-app="GoldenPhoenixApp">
<head>
	<title>Golden Phoenix</title>
	<link rel="stylesheet" href="{{ mix('css/main.css') }}">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	@stack('styles')
</head>
<body>
	<div class="pusher">
		<div id="Main">
			@yield("body")
		</div>
	</div>
	<script type="text/javascript" src="{{ mix('js/bundle.js') }}"></script>
	@stack('scripts')
</body>
</html>