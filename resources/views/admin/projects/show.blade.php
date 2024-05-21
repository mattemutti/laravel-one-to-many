@extends('layouts.admin')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-4 py-5 text-center">
                <div class="card">
                    <div class="card-title p-4">{{ $project->id }}</div>
                    <div class="card-body">Title: {{ $project->title }}</div>
                    <div class="card-body">Slug: {{ $project->slug }}</div>
                    <div class="card-body">Create: {{ $project->create_data }}</div>
                    <div class="card-body">Repo: {{ $project->repo }}</div>
                    <div class="card-body">Description: {{ $project->description }}</div>
                </div>
            </div>
        </div>
    </div>
@endsection
