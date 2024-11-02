@extends('layouts.app')

@section('title', 'Gestione Progetti')
@section('page-title', 'Lista Progetti')

@section('content')
    <a href="{{ route('admin.projects.create') }}">Aggiungi Nuovo Progetto</a>
    <ul>
        @foreach ($projects as $project)
            <li>
                <h2>{{ $project->title }}</h2>
                <p>{{ $project->description }}</p>
                <a href="{{ route('admin.projects.edit', $project) }}">Modifica</a>
                <form action="{{ route('admin.projects.destroy', $project) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Elimina</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
