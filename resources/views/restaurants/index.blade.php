@extends('layouts.app');

@section('content')

<div class="container-fluid w90 m5-auto mt-3">
  <h1 class="d-flex justify-content-between">
      Lista Ristoranti

      <a href="{{ route('restaurants.create') }}" class="btn btn-primary">
        <i class="fas fa-plus"></i>
        Aggiungi
      </a>
    </h1>

    <table class="table table-striped">
      <thead>
        <tr>
          <th>Nome</th>
          <th>Numero di telefono</th>
          <th>Immagine del ristorante</th>
          <th>P.IVA</th>
          <th>Indirizzo</th>
          <th>Tipologia</th>
        </tr>
      </thead>

      <tbody>
        @foreach ($restaurants as $restaurant)
          <tr>
            <td>{{ $restaurant->name }}</td>
            <td>{{ $restaurant->phone_number }}</td>
            <td><img src="{{ asset('storage/' . $restaurant->cover_img) }}" alt=""></td>
            <td>{{ $restaurant->vat }}</td>
            <td>{{ $restaurant->address }}</td>
            <td>
              @foreach ($restaurant->types as $type)
              {{ $type->name }}
              @endforeach
            </td>
            <td>
              <a href="{{ route('restaurants.show', $restaurant->id) }}" class="btn btn-link">
                <i class="fas fa-eye"></i>
              </a>

              <a href="{{ route('restaurants.edit', $restaurant->id) }}" class="btn btn-link">
                <i class="fa-solid fa-pencil"></i>      
              </a>

              <form method='POST' action="{{ route('restaurants.destroy', $restaurant->id) }}"
                  class="delete-form d-inline-block">
                  @csrf()
                  @method('delete')

                  <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>  

     {{-- {{ $restaurants->links() }} --}}

  </div>
@endsection