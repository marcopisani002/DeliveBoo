@extends('layouts.app');

@section('content')
<div class="container">
    <h1>Modifica Ristorante #{{ $restaurant->id }}</h1>

    <form enctype="multipart/form-data" action="{{ route('restaurants.update', $restaurant->id) }}" method="POST">
        @csrf
        @method('put')
        <div class="mb-3">
            <label class="form-label">Nome</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $restaurant->name) }}">
            @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Numero di telefono</label>
            <input type="number" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number', $restaurant->phone_number) }}">
            @error('phone_number')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="" class="form-label"><strong>Cover Image</strong></label>
            <input type="file" class="form-control @error('cover_img') is-invalid @elseif('cover_img')  @enderror" name="cover_img">
            {{-- Messaggio  --}}

            @error('cover_img')
            <div class="invalid-feedback">
                {{ $message }}
            </div>

            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">P.IVA</label>
            <input type="number" class="form-control @error('vat') is-invalid @enderror" name="vat" value="{{ old('vat', $restaurant->vat) }}">
            @error('vat')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Indirizzo</label>
            <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address', $restaurant->address) }}">
            @error('address')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <div class="mb-1"><b>Tipologia/e</b></div>
            @foreach ($types as $type)
            <div class="form-check form-check-inline @error('types') is-invalid @enderror">
                {{-- Il name dell'input ha come suffisso le quadre [] che indicheranno al server,
                    di creare un array con i vari tag che stiamo inviando --}}
                <input class="form-check-input @error('types') is-invalid @enderror" type="checkbox" id="CheckType_{{ $loop->index }}" value="{{ $type->id }}" name="types[]" {{ in_array( $type->id, old('types', [])) ? 'checked' : '' }}>
                <label class="form-check-label" for="CheckType_{{ $loop->index }}">{{ $type->name }}</label>
            </div>
            @endforeach

            @error('types')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <button class="btn btn-primary" type="submit">Salva le modifiche</button>
    </form>
</div>
@endsection
