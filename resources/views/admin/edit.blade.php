@extends('layouts.app')

@section('title', 'Modifica Progetto')
@section('page-title', 'Modifica Progetto')

@section('content')
    <form action="{{ route('admin.projects.update', $project) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="title" value="{{ $project->title }}" required>
        <textarea name="description" required>{{ $project->description }}</textarea>
        <input type="text" name="image" value="{{ $project->image }}">
        <input type="text" name="url" value="{{ $project->url }}">
        <button type="submit">Aggiorna</button>
    </form>
@endsection
