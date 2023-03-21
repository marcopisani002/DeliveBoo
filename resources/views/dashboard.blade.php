@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="d-flex justify-content-between">
            <div>
                <h4 class="fs-4 green-text my-4">Benvenuto <strong> {{ Auth::user()->name }}
                    {{ Auth::user()->surname }}!</strong></h4>
                @if ($restaurants->count() == 0)
                <a class='green-text text-decoration-none' href="{{ route('restaurants.create') }}">
                    <b>Vuoi aggiungere il tuo ristorante?</b>
                </a>
                @endif
            </div>
            <div class="dropdown mt-4 mb-5">
                <button class="btn btn-success dropdown-toggle fw-bold" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Azioni
                </button>

                <div class="dropdown-menu bg-success">
                    @if ($restaurants->count() > 0)
                    @else
                    <a class="dropdown-item text-center py-2" id='style-links' href="{{ route('restaurants.create') }}">
                        Aggiungi Il Tuo Ristorante</a>
                    @endif
                    <a class="dropdown-item text-center py-2" id='style-links' href="{{ route('restaurants.index') }}">
                        Il Tuo Ristorante</a>
                    <a class="dropdown-item text-center py-2" id='style-links' href="{{ route('dishes.index') }}">
                        I Tuoi Piatti</a>
                    <a class="dropdown-item text-center py-2" id='style-links' href="{{ route('dishes.create') }}">
                        Aggiungi un Piatto </a>
                </div>
            </div>        
        </div>

    </div>

    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-8 col-sm-6">
            <div class="card mt-5 bg-success text-white me-3">
                <div class="card-header fw-bold">{{ __('I Tuoi Dati') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table text-white">
                        <thead class="text-warning">
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Cognome</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody class="fw-bold">

                            <tr>
                                <td>{{ Auth::user()->id }}</td>
                                <td> {{ Auth::user()->name }}</td>
                                <td> {{ Auth::user()->surname }}</td>
                                <td> {{ Auth::user()->email }}</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    </div>
@endsection
