@extends('layouts.admin')

@section('content')
    <div class="container py-4">
        @include('partials.message-confirm')


        <div class="row py-4 gap-2 ">
            <div class="col-6 py-5 text-center py-4">
                <div class="card ">
                    <div class="card-title p-4">{{ $project->id }}</div>
                    <div class="card-image">{{ $project->cover_image }}</div>
                    <div class="card-body">Title: {{ $project->title }}</div>
                    <div class="card-body">Slug: {{ $project->slug }}</div>
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
