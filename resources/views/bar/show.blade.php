@extends('welcome')

@section('content')
<h2>ceci est un bar</h2>

    <article class="bar">
        <h3 class="nom-bar">{{ $bar->nom }}</h3>
        <p>{{ $bar->adresse }}</p>
        <p>{{ $bar->ville }}</p>
        <p>{{ $bar->description }}</p>
        <p>{{ $bar->note }}</p>
        
        <a href="{{ route('bar.edit', $bar->id) }}">Modifier</a>

        <form action="{{ route('bar.destroy', $bar->id) }}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="Supprimer">
        </form>
    </article>

@endsection