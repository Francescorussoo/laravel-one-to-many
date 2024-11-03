@extends('layouts.app')

@section('content')
    <form action="{{ route('backoffice.projects.update', $project) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="title" value="{{ $project->title }}" required>
        <textarea name="description" required>{{ $project->description }}</textarea>
        <input type="text" name="image" value="{{ $project->image }}">
        <input type="text" name="url" value="{{ $project->url }}">

        <label for="type_id">Tipologia</label>
        <select name="type_id">
            <option value="">Seleziona una tipologia</option>
            @foreach($types as $type)
                <option value="{{ $type->id }}" @if($project->type_id == $type->id) selected @endif>
                    {{ $type->name }}
                </option>
            @endforeach
        </select>

        <button type="submit">Aggiorna</button>
    </form>
@endsection
