@extends('welcome')

@section('content')
<h2>Modifiez un Bar</h2>

    <form action="{{route('bar.update', $bar->id)}}" method="post" class="form-container">
        @csrf
        @method('put')
        <div>
        <label for="nom">Nom du bar:</label>
        <input type="text" name="nom" id="nom" value="{{$bar->nom}}">
        </div>

        <div>
        <label for="adresse">Adresse:</label>
        <input type="text" name="adresse" id="adresse" value="{{$bar->adresse}}">
        </div>

        <div>
        <label for="ville">Ville:</label>
        <input type="text" name="ville" id="ville" value="{{$bar->ville}}">
        </div>

        <div>
        <label for="description">Description:</label>
        <textarea name="description" id="description" cols="30" rows="10">{{$bar->description}}</textarea>
        </div>

        <div>
        <label for="note">Note:</label>
        <input type="number" name="note" id="note" value="{{$bar->note}}">
        </div>
        
        <div>
        <input type="submit" value="update">
        </div>
    </form>

@endsection