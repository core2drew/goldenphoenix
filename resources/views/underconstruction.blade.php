@extends('templates.master')

@push('styles')
    <link rel="stylesheet" href="{{ mix('css/underconstruction.css') }}">
@endpush

@section('body')
   	<div class="ui fluid container" id="UnderConstruction">
   		<div id="Logo">
   			<img class="ui image tiny" src="{{asset('images/Logo.png')}}">
   			<span id="CompanyName">
				<h1 class="ui header">Golden Phoenix</h1>
				<label class="ui label">International Trading Corp.</label>
			</span>
   		</div>
   		<div id="MessageContainer">
   			<div id="Message">
   				<h1 class="ui header">
   				Be ready, 
	   			</h1>
	   			<h1 class="ui header">
	   				we are lunching soon!
	   			</h1>
	   			<h1 class="ui header">
	   				Stay tuned.
	   			</h1>
   			</div>
   			<div class="diagonal-shape-1"></div>
   		</div>
   	</div>
@endsection