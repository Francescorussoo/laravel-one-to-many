@extends('layouts.app')

@section('title', 'Aggiungi Progetto')
@section('page-title', 'Nuovo Progetto')

@section('content')
    <form action="{{ route('admin.projects.store') }}" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Titolo" required>
        <textarea name="description" placeholder="Descrizione" required></textarea>
        <input type="text" name="image" placeholder="URL Immagine">
        <input type="text" name="url" placeholder="URL Progetto">
        <button type="submit">Salva</button>
    </form>
@endsection
