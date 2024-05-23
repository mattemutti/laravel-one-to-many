@extends('layouts.admin')

@section('content')
    <div class="container py-4">
        @include('partials.message-confirm')


        <div class="row py-4 gap-2 ">
            <div class="col-6 py-5 text-center py-4">
                <div class="card ">
                    <div class="card-title p-4">ID: {{ $project->id }}</div>
                    <div class="card-image">
                        @if (Str::startsWith($project->cover_image, 'https://'))
                            <img width="600" loading="lazy" src="{{ $project->cover_image }}" alt="{{ $project->title }}">
                        @else
                            <img width="600" loading="lazy" src="{{ asset('storage/' . $project->cover_image) }}"
                                alt="{{ $project->title }}">
                        @endif
                    </div>
                    <div class="card-body">Title: {{ $project->title }}</div>
                    <div class="card-body">Slug: {{ $project->slug }}</div>
                    <div class="metadata">Type: {{ $project->type ? $project->type->name : 'No-type' }}</div>
                    <div class="card-body">Create: {{ $project->create_data }}</div>
                </div>
                <div class="card">
                    <div class="card-body">Repo: {{ $project->repo }}</div>
                    <div class="card-body">Code: {{ $project->code }}</div>
                </div>
                <div class="card">
                    <div class="card-body">Video: {{ $project->description }}</div>
                </div>
                <div class="card">
                    <div class="card-body">Description: {{ $project->description }}</div>
                </div>
            </div>
        </div>
    </div>
@endsection
