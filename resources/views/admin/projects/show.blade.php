@extends('layouts.admin')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-4 py-5 text-center">
                <div class="card">
                    <div class="card-title p-4">{{ $project->id }}</div>
                    <div class="card-body">{{ $project->title }}</div>
                    <div class="card-body">{{ $project->slug }}</div>
                    <div class="card-body">View/Edit/Delete</div>
                </div>
            </div>
        </div>



    </div>
@endsection
