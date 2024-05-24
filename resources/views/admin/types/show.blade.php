@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col text-danger text-center">

                <h1>{{ $type->name }}</h1>
                <h1>{{ $type->description }}</h1>
            </div>
        </div>
    </div>
@endsection
