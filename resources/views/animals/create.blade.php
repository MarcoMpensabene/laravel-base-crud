
@extends('layouts.app')

@section('page-title' , 'Create new Pokemon')

@section('main-content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <h1 class="text-center mb-3 fw-bold">
                    Add new Animal
                </h1>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach

                    </ul>
                </div>

                @endif

                <form action="{{route('animals.store')}}" method="POST" id="add-form">
                    {{-- @method('PUT/FETCH/DELETE/ETC')  dobbiamo utilizzare SE LA CHIAMATA NON è POST o GET  --}}
                    @csrf  {{-- token univoco che conferma che il form è autorizzato --}}
                    <div class="mb-3">
                        <label for="name">Nome</label>
                        <input class="form-control form-control-sm" type="text" placeholder="Nome dell'animale" aria-label="Nome dell'animale" name="name" id="name" required
                        value="{{old("name")}}">
                    </div>

                    <div class="mb-3">
                        <label for="species">Specie</label>
                        <input class="form-control form-control-sm" type="text" placeholder="Specie dell'animale" aria-label="Specie dell'animale" name="species" id="species" required value="{{old("species")}}">
                    </div>

                    <div class="mb-3">
                        <label for="breed">Razza</label>
                        <input class="form-control form-control-sm" type="text" placeholder="Razza dell'animale (opzionale)" aria-label="Razza dell'animale (opzionale)" name="breed" id="breed" value="{{old("breed")}}">
                    </div>

                    <div class="mb-3">
                        <label for="image_url">URL Immagine</label>
                        <input class="form-control form-control-sm" type="text" placeholder="URL immagine dell'animale" aria-label="URL immagine dell'animale" name="image_url" id="image_url" value="{{old("image_url")}}">
                    </div>

                    <div class="mb-3">
                        <label for="weight">Peso</label>
                        <input class="form-control form-control-sm" type="number" step="0.01" placeholder="Peso dell'animale" aria-label="Peso dell'animale" name="weight" id="weight"
                        value="{{old("wight")}}">
                    </div>

                    <div class="mb-3">
                        <label for="description">Descrizione</label>
                        <textarea class="form-control form-control-sm" placeholder="Descrizione dell'animale" aria-label="Descrizione dell'animale" name="description" id="description" >{{old("description")}}</textarea>
                    </div>

                    <div class="mb-3 d-flex justify-content-between p-2">
                        <input type="submit" value="Create new Animal" class="btn btn-primary" >
                        <input type="reset" value="Reset" class="btn btn-danger">
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@section('custom-scripts')
    @vite('resources/js/add-confirm.js')
@endsection
