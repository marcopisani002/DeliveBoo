@extends('layouts.app')

@section('content')
<main class="container-fluid">
    <div class="container-fluid text-start">
        <button class="btn bg-none m-3">
            <a href="{{route('dashboard')}}" class="text-decoration-none text-white">
                Back
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
                            <h5 class="card-title">Nome: {{$restaurant->name}}</h5>
                            <h6 class="card-text">Numero di telefono: {{$restaurant->phone_number}}</h6>
                            <h6 class="card-text">P.IVA:{{ $restaurant->vat }}</h6>
                            <h6 class="card-text">Indirizzo:{{ $restaurant->address }}</h6>
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