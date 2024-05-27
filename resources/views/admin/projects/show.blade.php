@extends('layouts.admin')

@section('content')
	{{-- @dd($project) --}}
	{{-- @dd($project->cover_image) --}}
	{{-- @dd($project, Storage::url($project->cover_image), asset('storage/' . $project->cover_image)) --}}

	<header class="py-3">
		<div class="container">
			<h1>{{ $project->title }}</h1>
		</div>
	</header>

	<section class="py-4">
		<div class="container">

			@if (Str::startsWith($project->cover_image, 'https://'))
				<img src="{{ $project->cover_image }}">
			@else
				<img src="{{ asset('storage/' . $project->cover_image) }}" alt="{{ $project->title }}" width="240" loading="lazy">
			@endif

			<p>{{ $project->content }}</p>
			<div class="metadata">
				<strong>Type</strong> {{ $project->type ? $project->type->name : 'no type selected' }}
			</div>
		</div>
	</section>
@endsection
