@extends('layouts.app')

@section('content')
    <main class="container-fluid vh-100">

        <div class="container-fluid ">

            <button class="btn bg-warning m-3 text-start">
                <a href="{{route('dashboard')}}" class="text-decoration-none text-white">
                    Back to Dashboard
                </a>
            </button>

            <button class="btn btn-info text-center"> 
            <a href="{{route('dishes.create')}}" class="text-decoration-none">
                Add a dish to your menu
            </a>
            </button>
        </div>

        <div class="row mx-5">
            @foreach ( $dishes as $dish )
                <div class="col-3 my-3">
                    <div class="card bg-form">
                        <img src="{{ asset('storage/' . $dish->cover_img) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><b>ID: </b>{{$dish->id}}</h5>
                            <h5 class="card-title"><b>Nome: </b>{{$dish->name}}</h5>
                            <p class="card-text"><b>Descrizione: </b>{{$dish->description}}</p>
                            <p class="card-text"><b>Ingredienti: </b>{{$dish->ingredients}}</p>
                            <p class="card-text"><b>Prezzo: </b>€{{$dish->price}}</p>
                            <p><b>Hide: </b>{{$dish->hide == true ? 'on' : 'off'}}</p>



                            <button class="btn btn-info"> <a href="{{route('dishes.edit', $dish->id)}}" class="text-decoration-none">Modify</a></button>

                            <form action="{{ route('dishes.destroy', $dish->id) }}" method="POST" id="form-delete">
                                @csrf()
                                @method('delete')

                                <button class="btn btn-danger my-3">
                                    <i class="fas fa-trash w-3">Delete</i>
                                </button>
                            </form>

                            <script>
                                const form = document.getElementById("form-delete");
                                form.addEventListener("submit", function(e) {
                                e.preventDefault();
                                const conferma = confirm("Sei sicuro di voler cancellare questo prodotto? Proprio sicuro sicuro?");
                                if (conferma === true) {
                                    form.submit();
                                }
                                })

                            </script>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
@endsection