@extends('layouts.app')

@section('content')
    <main class="container-fluid vh-100">

        <div class="container-fluid ">

            <button class="btn bg-warning m-3 text-start">
                <a href="{{route('dashboard')}}" class="text-decoration-none text-white">
                    Back to Dashboard
                </a>
            </button>
            @if ($userRestaurant->count() > 0)
                <button class="btn btn-info text-center"> 
                <a href="{{route('dishes.create')}}" class="text-decoration-none">
                    Add a dish to your menu
                </a>
                </button>
            @endif
        </div>

        <div class="row mx-5">
            @foreach ( $dishes as $dish )
            @if($dish->show == true)
                
                <div class="col-3 my-3">
                    <div class="card h-100 bg-form">
                        <div class="card-header">
                            <h5 class="card-title"><b>Piatto N° </b>{{$dish->id}}</h5>
                            <button class="btn btn-primary mb-2" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseExample{{$dish->id}}" aria-expanded="true" aria-controls="collapseExample">
                                Mostra/Nascondi
                            </button>
                            <div class="collapse" id="collapseExample{{$dish->id}}">
                                <div class="card card-body body-bg">
                                    <img src="{{ asset('storage/' . $dish->cover_img) }}" class="card-img-top h-50" alt="...">
                                    <div class="card-body" id="card-body">
                                        <h5 class="card-title"><b>Nome: </b>{{$dish->name}}</h5>
                                        <p class="card-text"><b>Descrizione: </b>{{$dish->description}}</p>
                                        <p class="card-text"><b>Ingredienti: </b>{{$dish->ingredients}}</p>
                                        <p class="card-text"><b>Prezzo: </b>€{{$dish->price}}</p>
                                        {{-- <p><b>Mostra: </b>{{$dish->show == true ? 'on' : 'off'}}</p> --}}

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

