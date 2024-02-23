@extends('layouts.app')
@section('content')

<div class="jumbotron p-5 mb-4 bg-light rounded-3">
    <div class="container py-5">
        
        <h1 class="display-5 fw-bold">
            List of projects:
        </h1>
    </div>
</div>

<div class="content">
    <div class="container">
        @foreach ($projects as $project)
        <div class="card my-5">
            <h5 class="card-header">{{ $project -> name}}</h5>
            <div class="card-body">
                <h6 class="card-title">⭐️Stars:{{ $project -> stars}}</h6>
                <h6 class="card-title">🍴Forks:{{ $project -> forks}}</h6>
                <p class="card-text">{{ $project -> description}}</p>
                <a href="{{ route('project.show', $project -> id)}}" class="btn btn-primary">Visit the project's repo</a>
            </div>
          </div>
            
        @endforeach
        
    </div>
</div>
@endsection