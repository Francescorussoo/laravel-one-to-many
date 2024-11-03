@extends('layouts.app')

@section('content')
    <h1>{{ $project->title }}</h1>
    <p>{{ $project->description }}</p>
    
    @if($project->type)
        <p><strong>Tipologia:</strong> {{ $project->type->name }}</p>
    @else
        <p><em>Tipologia non associata</em></p>
    @endif
@endsection
