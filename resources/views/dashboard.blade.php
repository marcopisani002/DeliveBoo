@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="d-flex justify-content-between">
            <h4 class="fs-4 text-white my-4">Benvenuto <strong> {{ Auth::user()->name }}
                    {{ Auth::user()->surname }}!</strong></h4>
            {{-- <div class="row">
              <div class="col-12 m-3">
              <button class="btn btn-primary my-bg-green border-0">
                <a href="{{ route('restaurants.create') }}" class="text-decoration-none text-white {{ $restaurant_id > 1 ? 'disabled' : ''}}">
                    <i class="fas fa-plus"></i>
                    Aggiungi
                </a>
            </button>
              </div>
             </div> --}}

            <div class="dropdown mt-4 mb-5">
                <button class="btn btn-success dropdown-toggle fw-bold" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Azioni
                </button>
                <ul class="dropdown-menu bg-light ">
                    @if ($restaurants->count() <= 0)
                    <li>
                        <a class="dropdown-item text-center " href="{{ route('restaurants.create') }}">Aggiungi Il Tuo Ristorante</a>
                    </li>
                    <hr>
                    @endif

                    <li><a class="dropdown-item text-center" href="{{ route('restaurants.index') }}">Il Tuo Ristorante</a>
                    <hr>
                    <a class="dropdown-item text-center" href="{{ route('dishes.index') }}">I Tuoi Piatti</a></li>
                    <hr>
                    <li><a class="dropdown-item text-center" href="{{ route('dishes.create') }}">Aggiungi un Piatto </a>
                    </li>


                </ul>
            </div>

        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
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
