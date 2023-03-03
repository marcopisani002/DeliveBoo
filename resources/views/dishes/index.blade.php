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
        @foreach($dishes as $dish)
                <div class="col-3 my-3 ">
                    <div class="card text-bg-success">
                        <img src="{{ asset('storage/' . $dish->cover_img) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$dish->name}}</h5>
                            <p class="card-text">{{$dish->description}}</p>
                            <p class="card-text">{{$dish->ingredients}}</p>
                            <p class="fs-3">{{$dish->price}}</p>
                            <p class="fs-3">{{$dish->hide}}</p>

                            <button class="btn btn-info"> <a href="{{route('dishes.edit', $dishes->id)}}" class="text-decoration-none">Modify</a></button>

                            <form action="{{ route('restaurants.dishes.destroy', $dishes->id) }}" method="POST" id="form-delete">
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