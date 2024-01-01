@extends('welcome')

@section('content')
<h2>ceci est un bar</h2>

    <article class="bar">
        <h3 class="nom-bar">{{ $bar->nom }}</h3>
        <p>{{ $bar->adresse }}</p>
        <p>{{ $bar->ville }}</p>
        <p>{{ $bar->description }}</p>
        <p>{{ $bar->note }}</p>
        
        <div class="link">
            <button class="btn" onclick="location.href='{{ route('bar.edit', $bar->id) }}'">Modifier</button>

            <form action="{{ route('bar.destroy', $bar->id) }}" method="post">
                @csrf
                @method('delete')
                <input class="btn" type="submit" value="Supprimer">
            </form>
        </div>
        
    </article>

@endsection