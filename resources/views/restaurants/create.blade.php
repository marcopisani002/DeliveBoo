@extends('layouts.app')

@section('content')
    <div class="container bg-form p-4 my-5 mx-auto">
        <div class="text-white mb-3">
            <b>I campi con * sono obbligatori</b>
        </div>
        <form class="text-white " enctype="multipart/form-data" action="{{ route('restaurants.store') }}" method="POST">
            @csrf
                <div class="mb-3">
                    <label class="form-label">Nome *</label>
                    <input type="text"
                        class="form-control @error('name') is-invalid @elseif(old('name')) is-valid @enderror"
                        placeholder="Nome del ristorante" name="name" value="{{ $errors->has('name') ? '' : old('name') }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Numero di telefono *</label>
                    <input type="number"
                        class="form-control @error('phone_number') is-invalid @elseif(old('phone_number')) is-valid @enderror"
                        placeholder="Numero di telefono" name="phone_number" value="{{ $errors->has('phone_number') ? '' : old('phone_number') }}">

                    <div class="mb-3">
                        <label class="form-label">Immagine di copertina *</label>
                        <input type="file"
                            class="form-control @error('cover_img') is-invalid @elseif('cover_img')  @enderror"
                            name="cover_img">
                        {{-- Messaggio  --}}

                        @error('cover_img')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>


                    <div class="mb-3">
                        <label class="form-label">P.IVA *</label>
                        <input type="number"
                            class="form-control @error('vat') is-invalid @elseif(old('vat')) is-valid @enderror"
                            placeholder="N° della tua partita IVA" name="vat" value="{{ $errors->has('vat') ? '' : old('vat') }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Indirizzo *</label>
                        <input type="text"
                            class="form-control @error('address') is-invalid @elseif(old('address')) is-valid @enderror"
                            placeholder="Indirizzo del ristorante" name="address" value="{{ $errors->has('address') ? '' : old('address') }}">
                    </div>

                <div class="mb-3">
                    <div class="mb-1 green-text">Tipologie di cucina *</div>
                    @foreach ($types as $type)
                        <div class="form-check form-check-inline @error('types') is-invalid @enderror">
                            <input class="form-check-input @error('types') is-invalid @enderror" type="checkbox" id="CheckType {{ $loop->index }}" value="{{ $type->id }}" name="types[]" {{ in_array( $type->id, old('types', [])) ? 'checked' : '' }}>
                            <label class="form-check-label" for="CheckType {{ $loop->index }}">{{ $type->name }}</label>
                        </div>
                    @endforeach

                        @error('types')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                </div>

                    <button class="btn my-bg-green text-white" type="submit">Save</button>
                    <button class="btn btn-warning m-3">
                        <a href="{{ route('dashboard') }}" class="text-decoration-none text-white">
                            Back
                        </a>
                    </button>

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

    <!-- Javascript Requirements -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

    <!-- Laravel Javascript Validation -->
    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js') }}"></script>

    {!! JsValidator::formRequest('App\Http\Requests\StoreRestaurantRequest') !!}

@endsection

