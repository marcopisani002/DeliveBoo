@extends('layouts.app')

@section('content')
    <main class="container-fluid vh-100">

        <div class="container-fluid ">

            <button class="btn bg-warning m-3 text-start">
                <a href="{{route('dashboard')}}" class="text-decoration-none text-white">
                    Torna alla Dashboard
                </a>
            </button>
            @if (isset(Auth::user()->restaurant->id))
                <button class="btn btn-success text-center"> 
                    <a href="{{route('dishes.create')}}" class="text-decoration-none text-white">
                        Aggiungi un piatto al tuo menu
                    </a>
                </button>
            @else
                <h5><a href="{{ route('restaurants.create') }}" class="text-decoration-none text-white">
                Non puoi creare piatti prima di aver creato il tuo ristorante, clicca qui per crearlo
                </a></h5>
            @endif
        </div>
        
        <div class="row mx-5">
            @if(count($dishes) > 0)
            <h1 class='text-white'>Piatti Abilitati</h1>
            @endif
            @foreach ( $dishes as $dish )
                @if($dish->show == 1)
                    
                <div class="my-3 col-lg-3 col-md-6 col-sm-10">
                    <div class="card h-100 bg-form">
                        <div class="card-header" style="border-bottom: 0;">
                            <h5 class="card-title mt-3 text-center"><b>{{$dish->name}}</b></h5>
                            <div>
                                <div class="card card-body body-bg" style="border: 0;">
                                    <img src="{{ asset('storage/' . $dish->cover_img) }}" class="card-img-top asp-ratio" alt="...">
                                    <div class="card-body" id="card-body">
                                        <h5 class="card-title text-center"><b></b></h5>
                                        <p class="card-text"><b class='text-grey'>Descrizione: </b>{{$dish->description}}</p>
                                        <p class="card-text"><b class='text-grey'>Ingredienti: </b>{{$dish->ingredients}}</p>
                                        <p class="card-text"><b class='text-grey'>Prezzo: <span class='text-danger'>€{{$dish->price}}</span></b></p>
                                        <p><b class='text-grey'>Mostra: </b>{{$dish->show == true ? 'on' : 'off'}}</p>
                                    </div>
                                    <div class="card-body d-flex justify-content-evenly">
                                        <button class="btn btn-success text-white border-0"> <a href="{{route('dishes.edit', $dish->slug)}}" class="text-decoration-none text-white">Modifica</a></button>

                                        <form action="{{ route('dishes.destroy', $dish->slug) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class=" btn btn-danger text-white border-0" type="submit" onclick="return confirm('Sei sicuro di voler eliminare questo piatto?')">Elimina</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            @endforeach
            
            @if(count($dishes) > 0)
            <h1 class='text-white'>Piatti Disabilitati</h1>
            @endif            
            @foreach ( $dishes as $dish )
                @if($dish->show == 0)
                    
                <div class="my-3 col-lg-3 col-md-6 col-sm-10">
                    <div class="card h-100 bg-form">
                        <div class="card-header" style="border-bottom: 0;">
                            <h5 class="card-title mt-3 text-center"><b>{{$dish->name}}</b></h5>
                            <div>
                                <div class="card card-body body-bg" style="border: 0;">
                                    <img src="{{ asset('storage/' . $dish->cover_img) }}" class="card-img-top asp-ratio" alt="...">
                                    <div class="card-body" id="card-body">
                                        <h5 class="card-title text-center"><b></b></h5>
                                        <p class="card-text"><b class='text-grey'>Descrizione: </b>{{$dish->description}}</p>
                                        <p class="card-text"><b class='text-grey'>Ingredienti: </b>{{$dish->ingredients}}</p>
                                        <p class="card-text"><b class='text-grey'>Prezzo: <span class='text-danger'>€{{$dish->price}}</span></b></p>
                                        <p><b class='text-grey'>Mostra: </b>{{$dish->show == true ? 'on' : 'off'}}</p>
                                    </div>
                                    <div class="card-body d-flex justify-content-evenly">
                                        <button class="btn btn-success text-white border-0"> <a href="{{route('dishes.edit', $dish->slug)}}" class="text-decoration-none text-white">Modifica</a></button>

                                        <form action="{{ route('dishes.destroy', $dish->slug) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class=" btn btn-danger text-white border-0" type="submit" onclick="return confirm('Sei sicuro di voler eliminare questo piatto?')">Elimina</button>
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

