@extends('welcome')

@section('content')
<h2>Ajoutez un Bar</h2>

    <form action="/bar/create" method="post" class="form-container">
        @csrf
        <div>
        <label for="nom">Nom du bar:</label>
        <input type="text" name="nom" id="nom">
        </div>

        <div>
        <label for="adresse">Adresse:</label>
        <input type="text" name="adresse" id="adresse">
        </div>

        <div>
        <label for="ville">Ville:</label>
        <input type="text" name="ville" id="ville">
        </div>

        <div>
        <label for="description">Description:</label>
        <textarea name="description" id="description" cols="30" rows="10"></textarea>
        </div>

        <div>
        <label for="note">Note:</label>
        <input type="number" name="note" id="note">
        </div>
        
        <div>
        <input type="submit" value="create">
        </div>
    </form>

@endsection