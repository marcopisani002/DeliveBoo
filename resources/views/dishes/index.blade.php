@extends('layouts.app')

@section('content')
    <main class="container-fluid vh-100">

        <div class="container-fluid ">

            <button class="btn bg-warning m-3 text-start">
                <a href="{{route('dashboard')}}" class="text-decoration-none text-white">
                    Back to Dashboard
                </a>
            </button>
            @if (isset(Auth::user()->restaurant->id))
                <button class="btn btn-info text-center"> 
                    <a href="{{route('dishes.create')}}" class="text-decoration-none">
                        Add a dish to your menu
                    </a>
                </button>
            @else
                <h5><a href="{{ route('restaurants.create') }}" class="text-decoration-none text-white">
                Non puoi creare piatti prima di aver creato il tuo ristorante, clicca qui per crearlo
                </a></h5>
            @endif
        </div>
        
        <div class="row mx-5">
            <h1>Piatti Abilitati</h1>
            @foreach ( $dishes as $dish )
                @if($dish->show == 1)
                    
                <div class="col-3 my-3">
                    <div class="card h-100 bg-form">
                        <div class="card-header" style="border-bottom: 0;">
                            <h5 class="card-title mt-3"><b>Piatto N° </b>{{$dish->id}}</h5>
                            <div>
                                <div class="card card-body body-bg" style="border: 0;">
                                    <img src="{{ asset('storage/' . $dish->cover_img) }}" class="card-img-top asp-ratio" alt="...">
                                    <div class="card-body" id="card-body">
                                        <h5 class="card-title"><b>Nome: </b>{{$dish->name}}</h5>
                                        <p class="card-text"><b>Descrizione: </b>{{$dish->description}}</p>
                                        <p class="card-text"><b>Ingredienti: </b>{{$dish->ingredients}}</p>
                                        <p class="card-text"><b>Prezzo: </b>€{{$dish->price}}</p>
                                        <p><b>Mostra: </b>{{$dish->show == true ? 'on' : 'off'}}</p>
                                    </div>
                                    <div class="card-body">
                                        <button class="btn btn-info"> <a href="{{route('dishes.edit', $dish->id)}}" class="text-decoration-none">Modifica</a></button>

                                        <form action="{{ route('dishes.destroy', $dish->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class=" btn btn-danger mt-3 text-white border-0" type="submit" onclick="return confirm('Sei sicuro di voler eliminare questo piatto?')">Elimina</button>
                                        </form>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                @endif
            @endforeach
            <h1>Piatti Disabilitati</h1>
            @foreach ( $dishes as $dish )
                @if($dish->show == 0)
                    
                <div class="col-3 my-3">
                    <div class="card h-100 bg-form">
                        <div class="card-header" style="border-bottom: 0;">
                            <h5 class="card-title mt-3"><b>Piatto N° </b>{{$dish->id}}</h5>
                            <div>
                                <div class="card card-body body-bg" style="border: 0;">
                                    <img src="{{ asset('storage/' . $dish->cover_img) }}" class="card-img-top h-50" alt="...">
                                    <div class="card-body" id="card-body">
                                        <h5 class="card-title"><b>Nome: </b>{{$dish->name}}</h5>
                                        <p class="card-text"><b>Descrizione: </b>{{$dish->description}}</p>
                                        <p class="card-text"><b>Ingredienti: </b>{{$dish->ingredients}}</p>
                                        <p class="card-text"><b>Prezzo: </b>€{{$dish->price}}</p>
                                        <p><b>Mostra: </b>{{$dish->show == true ? 'on' : 'off'}}</p>
                                    </div>
                                    <div class="card-body">
                                        <button class="btn btn-info"> <a href="{{route('dishes.edit', $dish->id)}}" class="text-decoration-none">Modifica</a></button>

                                        <form action="{{ route('dishes.destroy', $dish->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class=" btn btn-danger mt-3 text-white border-0" type="submit" onclick="return confirm('Sei sicuro di voler eliminare questo piatto?')">Elimina</button>
                                        </form>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                @endif
            @endforeach
        </div>
    </main>
@endsection

