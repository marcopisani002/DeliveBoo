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
        <div class="col-12 mt-5 justify-content-center bg-form">

        {{-- INIZIO FORM --}}
            <form action=" {{route('dishes.store') }} " class="row g-3" method="POST" enctype="multipart/form-data">
                @csrf

        {{-- INPUT NOME --}}
                <div class="col-md-6">
                    <label for="text" class="form-label">Name</label>
                    <input type="text" placeholder="Name of the Dish" class="form-control @error('name') is-invalid @elseif(old('name')) is-valid @enderror" id="" name="name" value="{{ $errors->has('name') ? '' : old('name') }}">

                    {{-- Messaggio  --}}
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @elseif(old('name'))
                    <div class="valid-feedback">
                        Nice work dude!
                    </div>
                    @enderror

                </div>

        {{-- INPUT IMMAGINE --}}
                <div class="col-md-6">
                    <label for="" class="form-label">Cover Image</label>
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
                    <label for="text" class="form-label">Description</label>
                    <textarea type="text" cols="30" rows="5" class="form-control  @error('description') is-invalid @enderror" placeholder="Description" name="description">{{ old('description') }}</textarea>

                    {{-- Messaggio  --}}
                    @error('description')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @elseif(old('description'))
                    <div class="valid-feedback">
                        Nice work dude!
                    </div>
                    @enderror

                </div>

            {{-- INPUT INGREDIENTS--}}
                <div class="col-12">
                    <label for="text" class="form-label">Ingredients</label>
                    <textarea type="text" cols="30" rows="5" class="form-control  @error('ingredients') is-invalid @enderror" placeholder="Ingredients" name="ingredients">{{ old('ingredients') }}</textarea>

                    {{-- Messaggio  --}}
                    @error('ingredients')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @elseif(old('ingredients'))
                    <div class="valid-feedback">
                        Nice work dude!
                    </div>
                    @enderror

                </div>

        {{-- INPUT PRICE --}}
                <div class="col-12">
                    <label for="" class="form-label">Price</label>
                    <input type="number" step='.01' class="form-control @error('price') is-invalid @elseif(old('price')) is-valid @enderror" name="price" value="{{ $errors->has('price') ? '' : old('price') }}" id="" placeholder="price" name="price" value="{{ $errors->has('price') ? '' : old('price') }}">

                    {{-- Messaggio  --}}
                    @error('price')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @elseif(old('price'))
                    <div class="valid-feedback">
                        Nice work dude!
                    </div>
                    @enderror
                </div>
                

                {{-- HIDE --}}
                <div class="form-check form-switch">
                    <label class="form-check-label" for="flexSwitchCheckDefault">Hide</label>
                    <input value="1" class="form-check-input" type="checkbox" name="hide" role="switch" id="flexSwitchCheckDefault"
                    {{ ( 'hide' == 1) ? 'checked' : '' }}>
                </div>


        {{-- PULSANTI: SUBMIT E BACK TO DASHBOARD --}}
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Submit</button>

                    <button class="btn bg-none m-3">
                        <a href="{{route('dishes.index')}}" class="text-decoration-none text-white">
                            Back 
                        </a>
                    </button>
                </div>


            </form>
        </div>
    </div>
    </div>
    </div>

</main>
@endsection
