@extends('layouts.app')

@section('content')
<main class="container-fluid">
    <div class="container-fluid text-start">
        <button class="btn btn-warning m-3" class="text-decoration-none text-white">
            <a href="{{route('dashboard')}}">
                Back to Dashboard
            </a>
        </button>
    </div>

    <div class="row mx-5">
                <div class="col-6 my-3">
                    <div class="card">
                        <img src="{{ asset('storage/' . $restaurant['cover_img']) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><b>Nome:</b> {{$restaurant->name}}</h5>
                            <p class="card-text"><b>Numero di telefono:</b> {{$restaurant->phone_number}}</p>
                            <p class="card-text"><b>P.IVA:</b> {{ $restaurant->vat }}</p>
                            <p class="card-text"><b>Indirizzo:</b> {{ $restaurant->address }}</p>
                            <p>
                                <b>Tipologia:</b>
                                @foreach ($restaurant->types as $type)
                                {{ $type->name }}
                                @endforeach
                            </p>

                            <button class="btn btn-info"> <a href="{{route('restaurants.edit', $restaurant->id)}}" class="text-decoration-none">Modifica</a></button>
                            <form action="{{ route('restaurants.destroy', $restaurant->id) }}" method="POST" id="form-delete">
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