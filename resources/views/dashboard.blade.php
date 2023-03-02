@extends('layouts.app')

@section('content')
<div class="container">
    
        <h4 class="fs-4 text-white my-4">Benvenuto <strong> {{ Auth::user()->name }} {{ Auth::user()->surname }}!</strong></h4>
    
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">{{ __('User Dashboard') }}</div>

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
