@extends('layouts.app')

@section('content')
    <main class="container-fluid">
        <div class="container-fluid text-start">
            <button class="btn btn-warning m-3" class="text-decoration-none text-white">
                <a href="{{ route('dishes.index') }}" class="text-decoration-none text-white">
                    Back to Dishes/Menu
                </a>
            </button>
        </div>

        <div class="row mx-5">
            <div class="col-lg-4 col-md-8 col-sm-12 my-3">
                <div class="bg-form">
                    <div class="card h-100 bg-form">
                        <img src="{{ asset('storage/' . $dish->cover_img) }}" class="card-img-top h-50" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><b>ID: </b>{{ $dish->id }}</h5>
                            <h5 class="card-title"><b>Nome: </b>{{ $dish->name }}</h5>
                            <p class="card-text"><b>Descrizione: </b>{{ $dish->description }}</p>
                            <p class="card-text"><b>Ingredienti: </b>{{ $dish->ingredients }}</p>
                            <p class="card-text"><b>Prezzo: </b>€{{ $dish->price }}</p>
                            <p><b>Mostra: </b>{{ $dish->show == 1 ? 'on' : 'off' }}</p>

                            <div class="d-flex justify-content-evenly align-items-center mb-2">
                                <button class="btn btn-info"> <a href="{{ route('dishes.edit', $dish->slug) }}"
                                        class="text-decoration-none">Modifica</a></button>

                                    <form action="{{ route('dishes.destroy', $dish->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class=" btn btn-danger text-white border-0" type="submit" onclick="return confirm('Sei sicuro di voler eliminare questo piatto?')">Elimina</button>
                                    </form>
                                </form>
                            </div>
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
