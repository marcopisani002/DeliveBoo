@extends('layouts.app')

@section('content')
<div class="container">
    <form enctype="multipart/form-data" action="{{ route('restaurants.store') }}" method="POST">
    @csrf
        <div class="mb-3">
            <label class="form-label"><b>Nome</b></label>
            <input type="text"
            class="form-control @error('restaurant_name') is-invalid @elseif(old('restaurant_name')) is-valid @enderror"
            name="restaurant_name" value="{{ $errors->has('restaurant_name') ? '' : old('restaurant_name') }}">

        <div class="mb-3">
            <label class="form-label"><b>Numero di telefono</b></label>
            <input type="number"
            class="form-control @error('phone_number') is-invalid @elseif(old('phone_number')) is-valid @enderror"
            name="phone_number" value="{{ $errors->has('phone_number') ? '' : old('phone_number') }}">

        <div class="mb-3">
            <label class="form-label"><b>Immagine</b></label>
            <input type="text" class="form-control  @error('cover_img') is-invalid @enderror" name="cover_img"
            value="{{ old('cover_img') }}">
            @error('cover_img')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label"><b>P.IVA</b></label>
            <input type="number"
            class="form-control @error('vat') is-invalid @elseif(old('vat')) is-valid @enderror"
            name="vat" value="{{ $errors->has('vat') ? '' : old('vat') }}">
        </div>

        <div class="mb-3">
            <label class="form-label"><b>Indirizzo</b></label>
            <input type="text"
            class="form-control @error('address') is-invalid @elseif(old('address')) is-valid @enderror"
            name="address" value="{{ $errors->has('address') ? '' : old('address') }}">
        </div>

        <div class="mb-3">
            <div class="mb-1"><b>Tipologie di ristorante</b></div>
            @foreach ($types as $type)
            <div class="form-check form-check-inline @error('types') is-invalid @enderror">
            <input class="form-check-input @error('types') is-invalid @enderror" type="checkbox"
                id="CheckType {{ $loop->index }}" value="{{ $type->id }}" name="types[]"
                {{ in_array( $type->id, old('types', [])) ? 'checked' : '' }}
                >
            <label class="form-check-label" for="CheckType {{ $loop->index }}">{{ $type->name }}</label>
            </div>
            @endforeach

            @error('types')
            <div class="invalid-feedback">
            {{ $message }}
            </div>
            @enderror
        </div>

        <button class="btn btn-primary" type="submit">Salva</button>
        
        {{-- CHECK DEGLI ERRORI COMPLESSIVO  --}}
        @if ($errors->any())
        <div class="alert alert-danger">
        I dati inseriti non sono validi:

        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        </div>
    @endif
    </form>
</div>
@endsection
