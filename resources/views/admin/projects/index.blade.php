@extends('layouts.admin')

@section('content')
    <div class="container">
        <section class="py-4">
            <div class="d-flex justify-content-between">
                <h1>MATTE'S PROJECTS</h1>
                <div>
                    <a class="btn btn-secondary" href="{{ route('admin.projects.create') }}"><i class="fa fa-pencil" aria-hidden="true"></i> NewProject</a>
                </div>
            </div>
        </section>

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

                            <td>
                                <a class="btn btn-dark" href="{{ route('admin.projects.show', $project) }}">View</a>
                                /Edit/Delete
                            </td>
                        </tr>
                    @empty
                        <tr class="">
                            <td scope="row" colspan="5">No Projects</td>

                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        {{ $projects->links('pagination::bootstrap-5') }}
    </div>
@endsection
