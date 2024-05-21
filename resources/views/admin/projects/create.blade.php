@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row py-2">
            <h1>CREATE PROJECT</h1>
        </div>
        @include('partials.validation-errors')

        <form action="{{ route('admin.projects.store') }}" method="post">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="title" aria-describedby="titleHelper"
                    placeholder="project" @error('title') is-invalid @enderror value="{{ old('title') }}" />
                <small id="titleHelper" class="form-text text-muted">Type a title for this project</small>
                @error('title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="create_data" class="form-label">Date</label>
                <input type="text" class="form-control" name="create_data" id="create_data"
                    aria-describedby="create_dataHelper" placeholder="project date"
                    @error('create_data') is-invalid @enderror value="{{ old('create_date') }}" />
                <small id="create_dataHelper" class="form-text text-muted">Type a date for this project</small>
                @error('create_data')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="repo" class="form-label">Repo</label>
                <input type="text" class="form-control" name="repo" id="repo" aria-describedby="repoHelper"
                    placeholder="project date" @error('repo') is-invalid @enderror value="{{ old('repo') }}" />
                <small id="repoHelper" class="form-text text-muted">Type link the repo for this project</small>
                @error('repo')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>

                <textarea name="description" id="description" cols="100" rows="10"
                    class="@error('description') is-invalid @enderror">
                {{ old('description') }}
            </textarea>
                @error('description')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-secondary">Create</button>


        </form>
    </div>
@endsection
