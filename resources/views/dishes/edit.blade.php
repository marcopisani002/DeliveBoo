@extends('layouts.app')

@section('content')
<main class="m-5">
    {{-- validazione dati --}}
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


    <div class="row">
        <div class="col-lg-12 col-sm-12 mt-5 justify-content-center bg-form">

        {{-- INIZIO FORM --}}
            <form action=" {{ route('dishes.update', $dish->slug) }} " class="row g-3 p-3 py-4" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

        {{-- INPUT NOME --}}
                <div class="col-md-6">
                    <label for="text" class="form-label">Nome</label>
                    <input type="text" class="form-control @error('name') is-invalid @elseif(old('name')) is-valid @enderror" id="" name="name" 
                    value="{{ old('name', $dish->name) }}">

                    {{-- Messaggio  --}}
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @elseif(old('name'))
                    <div class="valid-feedback">
                        Ben fatto!
                    </div>
                    @enderror

                </div>

        {{-- INPUT IMMAGINE --}}
                <div class="col-md-6">
                    <label for="" class="form-label">Immagine di copertina</label>
                    <input type="file"  class="form-control @error('cover_img') is-invalid @elseif('cover_img')  @enderror" name="cover_img" >
                    {{-- Messaggio  --}}
                    @error('cover_img')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                
                    @enderror
                </div>

        {{-- INPUT DESCRIZIONE --}}
                <div class="col-12">
                    <label for="" class="form-label">Descrizione</label>
                    <textarea type="text" cols="30" rows="5" class="form-control  @error('description') is-invalid @enderror"
                    name="description">{{ old('description', $dish->description) }}</textarea>

                    {{-- Messaggio  --}}
                    @error('description')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @elseif(old('description'))
                    <div class="valid-feedback">
                        Ben fatto!
                    </div>
                    @enderror

                </div>

            {{-- INPUT DESCRIZIONE --}}
                <div class="col-12">
                    <label for="" class="form-label">Ingredienti</label>
                    <textarea type="text" cols="30" rows="5" class="form-control  @error('ingredients') is-invalid @enderror"
                    name="ingredients">{{ old('ingredients', $dish->ingredients) }}</textarea>

                    {{-- Messaggio  --}}
                    @error('ingredients')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @elseif(old('ingredients'))
                    <div class="valid-feedback">
                        Ben fatto!
                    </div>
                    @enderror

                </div>

        {{-- INPUT PRICE --}}
                <div class="col-12">
                    <label for="" class="form-label">Prezzo</label>
                    <input type="number" step=".01"  class="form-control @error('price') is-invalid @elseif(old('price')) is-valid @enderror"
                    name="price" value="{{ old('price', $dish->price) }}" id="">

                    {{-- Messaggio  --}}
                    @error('price')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @elseif(old('price'))
                    <div class="valid-feedback">
                        Ben fatto!
                    </div>
                    @enderror
                </div>

            <div class="form-check form-switch m-left">
                <label class="form-check-label" for="flexSwitchCheckDefault">Mostra</label>
                <input onclick="checkboxClicked()" value='{{$dish->show}}' class="form-check-input" type="checkbox" name="show" role="switch" id="flexSwitchCheckDefault" 
                {{ ( $dish->show == 0) ? '' : 'checked' }}>
            </div>

        {{-- PULSANTI: SUBMIT E BACK TO DASHBOARD --}}
                <div class="col-12">
                    <button type="submit" class="btn btn-success">Salva</button>

                    <button class="btn btn-warning m-3">
                        <a href="{{route('dishes.index')}}" class="text-decoration-none text-white">
                            Torna ai Piatti/Menu
                        </a>
                    </button>
                </div>

            </form>
        </div>
    </div>

</main>

<script>
    function checkboxClicked() {
  let checkBox = document.getElementById("flexSwitchCheckDefault");
  if (checkBox.checked == true){
    checkBox.value = 1; // Imposta il valore a true
  } else {
    checkBox.value = 0; // Imposta il valore a false
  }
}
</script>

    <!-- Javascript Requirements -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

    <!-- Laravel Javascript Validation -->
    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js') }}"></script>

    {!! JsValidator::formRequest('App\Http\Requests\UpdateDishRequest') !!}
@endsection
