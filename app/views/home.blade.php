@extends('layout.main')

@section('content')
	<div class="row">
		<div class="large-12 column">
			Landing page for new users only
			<a href="{{URL::route('register')}}">Register</a>
		</div>
	</div>
@stop