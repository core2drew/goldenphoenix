@extends('templates.master')


@push('styles')
	<link rel="stylesheet" type="text/css" href="{{ mix('css/onepage.css') }}">
@endpush


@section('body')
	@include('onepage.header')
	@include('onepage.banner')
	@include('onepage.about')
	@include('onepage.what_we_do')
	@include('onepage.products')
	@include('onepage.partners')
	@include('onepage.get_in_touch')
@endsection

@push('scripts')
	<script type="text/javascript" src="{{ mix('js/main.js') }}"></script>
	<script type="text/javascript" src="{{ mix('js/controllers/contactController.js') }}"></script>
@endpush