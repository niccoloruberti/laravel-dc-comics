@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-12">
                <h2 class="fw-bold">Inserisci una nuova serie</h2>
            </div>
        </div>
        <div>
            <form action="{{ route('comics.update', $comic->id) }}" method="POST" class="w-50">
            @csrf @method('PUT')
                {{-- titolo --}}
                <div class="form-group py-3">
                    <label class="control-label">Titolo</label>
                    <input type="text" id="title" name="title" class="form-control" placeholder="titolo" value="{{ $comic->title }}">
                </div>
                {{-- descrizione --}}
                <div class="form-group py-3">
                    <label class="control-label">Descrizione</label>
                    <input type="text" id="description" name="description" class="form-control" placeholder="Inserisci la descrizione.." value="{{ $comic->description }}">
                </div>
                {{-- thumb--}}
                <div class="form-group py-3">
                    <label class="control-label">Miniatura</label>
                    <input type="text" id="thumb" name="thumb" class="form-control" placeholder="Inserisci il link della miniatura" value="{{ $comic->thumb }}">
                </div>
                {{-- cover_image --}}
                <div class="form-group py-3">
                    <label class="control-label">Immagine di copertina</label>
                    <input type="text" id="cover_image" name="cover_image" class="form-control" placeholder="Inserisci l'url dell'immagine di copertina" value="{{ $comic->cover_image }}">
                </div>
                {{-- thumb2 --}}
                <div class="form-group py-3">
                    <label class="control-label">Miniatura 2</label>
                    <input type="text" id="thumb2" name="thumb2" class="form-control" placeholder="Inserisic il link della seconda miniatura" value="{{ $comic->thumb2 }}">
                </div>
                {{-- price --}}
                <div class="form-group py-3">
                    <label class="control-label">Prezzo</label>
                    <input type="text" id="price" name="price" class="form-control" placeholder="Inserisci il prezzo" value="{{ $comic->price }}">
                </div>
                {{-- series --}}
                <div class="form-group py-3">
                    <label class="control-label">Serie</label>
                    <input type="text" id="series" name="series" class="form-control" placeholder="Inserisci il nome della serie" value="{{ $comic->series }}">
                </div>
                {{-- sale_date --}}
                <div class="form-group py-3">
                    <label class="control-label">Data di uscita</label>
                    <input type="text" id="sale_date" name="sale_date" class="form-control" placeholder="Inserisci la data di uscita" value="{{ $comic->sale_date }}">
                </div>
                {{-- type --}}
                <div class="form-group py-3">
                    <label class="control-label">Genere</label>
                    <input type="text" id="type" name="type" class="form-control" placeholder="Inserisci il genere" value="{{ $comic->type }}">
                </div>
                {{-- artists --}}
                <div class="form-group py-3">
                    <label class="control-label">Artisti</label>
                    <input type="text" id="artists" name="artists" class="form-control" placeholder="Inserisci gli artisti" value="{{ $comic->artists }}">
                </div>
                {{-- writers --}}
                <div class="form-group py-3">
                    <label class="control-label">Scrittori</label>
                    <input type="text" id="writers" name="writers" class="form-control" placeholder="Inserisci gli scrittori" value="{{ $comic->writers }}">
                </div>
                {{-- submit --}}
                <div class="form-group">
                    <button class="btn btn-success" type="submit">modifica</button>
                </div>
            </form>
        </div>
    </div>
@endsection