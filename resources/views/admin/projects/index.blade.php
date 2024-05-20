@extends('layouts.admin')

@section('content')
    <div class="container">

        <div class="table-responsive">
            <table class="table table-light">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Actions </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($projects as $project)
                        <tr class="">
                            <td scope="row">{{ $project->id }}</td>
                            <td>{{ $project->title }}</td>
                            <td>{{ $project->slug }}</td>
                            <td>View/Edit/Delete</td>
                        </tr>

                    @empty
                        <tr class="">
                            <td scope="row" colspan="5">No Projects</td>

                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>




    </div>
@endsection
