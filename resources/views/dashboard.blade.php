@extends('layouts.app')
@section('content')
<div class="container">
    <h4 class="fs-4 text-white my-4">Benvenuto <strong> {{ Auth::user()->name }} {{ Auth::user()->surname }}!</strong></h4>
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
    <div class="row justify-content-center ">
        <div class="col-12">
            <div class="bg-form card text-white border-0">
                <div class="card-header border-0">{{ __('User Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
