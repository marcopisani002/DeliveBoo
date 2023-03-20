@extends('layouts.app')

@section('content')
    <main class="container-fluid">
        <div class="container-fluid text-start">
            <button class="btn btn-warning m-3">
                <a href="{{ route('dashboard') }}" class="text-decoration-none text-white">
                    Torna alla Dashboard
                </a>
            </button>

        @if ($restaurants->count() > 0)
            @foreach ($restaurants as $restaurant)
                <div class="row mx-5 justify-content-center">
                    <div class="col-lg-6 col-md-10 col-sm-12 m-5 bg-form">
                        <div class="card m-5">
                            <img src="{{ asset('storage/' . $restaurant['cover_img']) }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Nome: {{ $restaurant->name }}</h5>
                                <p class="card-text"><b>Numero di telefono:</b> {{ $restaurant->phone_number }}</p>
                                <p class="card-text"><b>P.IVA:</b> {{ $restaurant->vat }}</p>
                                <p class="card-text"><b>Indirizzo:</b> {{ $restaurant->address }}</p>
                                <p>
                                    <b>Tipologia:</b>
                                    @foreach ($restaurant->types as $type)
                                        <span class="badge rounded-pill text-bg-success">{{ $type->name }}</span>
                                    @endforeach
                                </p>
                            </div>
                        </div>
                    </div>
            @endforeach
            @else
                <button class="btn btn-primary my-bg-green border-0">
                    <a href="{{ route('restaurants.create') }}" class="text-decoration-none text-white">
                        <i class="fas fa-plus"></i>
                        Aggiungi
                    </a>
                </button>
                <h5 class="text-decoration-none text-white"><b>Non hai ancora aggiunto il tuo ristorante, ma puoi farlo subito con il pulsante qui sopra.
                </b></h5>
            @endif        
            </div>
        </div>
    </main>
@endsection
