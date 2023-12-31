@extends('layouts.app')

@section('content')
{{-- jumbotron --}}
<div class="jumbotron">
    <a href="{{ route('comics.create')}}"><button>AGGIUNGI</button></a>
</div>
{{-- contenuto --}}
<div class="bg-dark py-5">
    <div class="container">
        <div class="row">
            @foreach($comics as $comic)
                <div class="col-2 my-3">
                <a  href="{{ route('comics.show', $comic->id)}}" class="link-underline link-underline-opacity-0">
                    <div class="card-content h-100 w-100 d-flex flex-column align-items-center">
                        <img src="{{ $comic['thumb'] }}">
                        <h3 class=" mt-2 text-center text-white text-uppercase w-100"> {{ $comic['title'] }}</h3>
                    </div>
                </a>
                </div>
            @endforeach
        </div>
    </div>
    <div class="text-center">
        <button>load more</button>
    </div>
</div>
@endsection