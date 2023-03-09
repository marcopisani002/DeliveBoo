@extends('layouts.app')

@section('content')
<main class="container-fluid">
    <div class="container-fluid text-start">
        <button class="btn bg-warning m-3">
            <a href="{{route('dashboard')}}" class="text-decoration-none text-white">
                Back to Dashboard
            </a>
        </button>
    </div>

    <div class="row mx-5 justify-content-center">
                <div class="col-5 my-3">
                    <div class="card bg-form p-5 ">
                    <div class="img-thumbnail img-fluid">
                        <img src="{{ asset('storage/' . $restaurant['cover_img']) }}" class="rounded" alt="...">
                    </div>
                        <div class="card-body">
                            <h5 class="card-title"><b>Nome: </b>{{$restaurant->name}}</h5>
                            <h6 class="card-text"><b>Numero di telefono: </b>{{$restaurant->phone_number}}</h6>
                            <h6 class="card-text"><b>P.IVA: </b>{{ $restaurant->vat }}</h6>
                            <h6 class="card-text"><b>Indirizzo: </b>{{ $restaurant->address }}</h6>
                            <div>
                                {{-- <b>Tipologia:</b> --}}
                                @foreach ($restaurant->types as $type)
                                <span class="badge rounded-pill text-bg-success">{{ $type->name }}</span>
                                @endforeach
                            </div>

                        </div>
                    </div>
                </div>
    </div>
</main>
@endsection