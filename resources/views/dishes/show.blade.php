@extends('layouts.app')

@section('content')
    <main class="container-fluid">
        <div class="container-fluid text-start">
            <button class="btn btn-warning m-3" class="text-decoration-none text-white">
                <a href="{{ route('dashboard') }}">
                    Back to Dashboard
                </a>
            </button>
        </div>

        <div class="row mx-5">
            <div class="col-6 my-3">
                <div class="bg-form">
                    <div class="card h-100 bg-form">
                        <img src="{{ asset('storage/' . $dish->cover_img) }}" class="card-img-top h-50" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><b>ID: </b>{{ $dish->id }}</h5>
                            <h5 class="card-title"><b>Nome: </b>{{ $dish->name }}</h5>
                            <p class="card-text"><b>Descrizione: </b>{{ $dish->description }}</p>
                            <p class="card-text"><b>Ingredienti: </b>{{ $dish->ingredients }}</p>
                            <p class="card-text"><b>Prezzo: </b>€{{ $dish->price }}</p>
                            <p><b>Hide: </b>{{ $dish->hide == true ? 'on' : 'off' }}</p>

                            <button class="btn btn-info"> <a href="{{ route('dishes.edit', $dish->id) }}"
                                    class="text-decoration-none">Modifica</a></button>
                            <form action="{{ route('dishes.destroy', $dish->id) }}" method="POST" id="form-delete">
                                @csrf()
                                @method('delete')

                                <button class="btn btn-danger my-3">
                                    <i class="fas fa-trash w-3">Elimina</i>
                                </button>
                            </form>
                        </div>

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
        </div>
    </main>
@endsection
