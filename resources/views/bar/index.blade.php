@extends('welcome')

@section('content')
    <h2>liste de tout les bars</h2>

        @foreach($bars as $bar)
        <article class="bar">
            <h3 class="nom-bar">{{ $bar->nom }}</h3>
            <p>{{ $bar->adresse }}</p>
            <p>{{ $bar->ville }}</p>
            <p>{{ $bar->description }}</p>
            <p>{{ $bar->note }}</p>

            <a href="{{ route('bar.show', $bar->id) }}">Voir</a>
            <a href="{{ route('bar.edit', $bar->id) }}">Modifier</a>

            <form action="{{ route('bar.destroy', $bar->id) }}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="Supprimer">
            </form>
        </article>
        @endforeach
@endsection