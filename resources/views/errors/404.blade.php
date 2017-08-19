@extends('base')

@section('title', 'oops')

@section('app')

	<div class="container -max--xl menu-pad t--center">
		<img src="{{asset('img/error-page.jpg')}}" width="200px" class="mb-4">
		<h1 class="c--jazzy">This page doesn't exist...</h1>
		<p>You don't have to go <a href="{{route('home')}}">home</a>, but you can't stay here.</p>
	</div>

@endSection