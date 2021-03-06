@extends('layout.main')

@section('content')
	<div class="row">
		<div class="large-12 column">
			<h2>{{$user->username}}</h2>
			@if(Auth::check())
				<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
			@endif
			<h4>Images posted by {{$user->username}}</h4>
			@foreach(Auth::user()->images as $image)
				<div class="large-2 column">
					<img src="{{Assets::asset($image->path)}}">
					{{$image->name}}
				</div>
			@endforeach
		</div>
	</div>
@stop