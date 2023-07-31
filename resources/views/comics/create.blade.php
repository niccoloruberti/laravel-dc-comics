@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-12">
                <h2 class="fw-bold">Inserisci una nuova serie</h2>
            </div>
        </div>
        <div>
            <form action="" method="POST" class="w-50">
                {{-- titolo --}}
                <div class="form-group py-3">
                    <label class="control-label">Titolo</label>
                    <input type="text" id="title" name="title" class="form-control" placeholder="titolo">
                </div>
                {{-- descrizione --}}
                <div class="form-group py-3">
                    <label class="control-label">Descrizione</label>
                    <input type="text" id="description" name="description" class="form-control" placeholder="Inserisci la descrizione..">
                </div>
                {{-- thumb--}}
                <div class="form-group py-3">
                    <label class="control-label">Miniatura</label>
                    <input type="text" id="thumb" name="thumb" class="form-control" placeholder="Inserisci il link della miniatura">
                </div>
                {{-- cover_image --}}
                <div class="form-group py-3">
                    <label class="control-label">Immagine di copertina</label>
                    <input type="text" id="cover_image" name="cover_image" class="form-control" placeholder="Inserisci l'url dell'immagine di copertina">
                </div>
                {{-- thumb2 --}}
                <div class="form-group py-3">
                    <label class="control-label">Miniatura 2</label>
                    <input type="text" id="thumb2" name="thumb2" class="form-control" placeholder="Inserisic il link della seconda miniatura">
                </div>
                {{-- price --}}
                <div class="form-group py-3">
                    <label class="control-label">Prezzo</label>
                    <input type="text" id="price" name="price" class="form-control" placeholder="Inserisci il prezzo">
                </div>
                {{-- series --}}
                <div class="form-group py-3">
                    <label class="control-label">Serie</label>
                    <input type="text" id="series" name="series" class="form-control" placeholder="Inserisci il nome della serie">
                </div>
                {{-- sale_date --}}
                <div class="form-group py-3">
                    <label class="control-label">Data di uscita</label>
                    <input type="text" id="sale_date" name="sale-date" class="form-control" placeholder="Inserisci la data di uscita">
                </div>
                {{-- type --}}
                <div class="form-group py-3">
                    <label class="control-label">Genere</label>
                    <input type="text" id="type" name="type" class="form-control" placeholder="Inserisci il genere">
                </div>
                {{-- artists --}}
                <div class="form-group py-3">
                    <label class="control-label">Artisti</label>
                    <input type="text" id="artists" name="artists" class="form-control" placeholder="Inserisci gli artisti">
                </div>
                {{-- writers --}}
                <div class="form-group py-3">
                    <label class="control-label">Scrittori</label>
                    <input type="text" id="writers" name="writers" class="form-control" placeholder="Inserisci gli scrittori">
                </div>
            </form>
        </div>
    </div>
@endsection