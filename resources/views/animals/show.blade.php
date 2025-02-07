
@extends('layouts.app')

@section('page-title' , 'Show')

@section('main-content')

    <main>
         <h1 class="text-center">Single Animal</h1>
        <div class="container">
            <div class="row">
                <article class="col-12">
                    @if (session("message"))
                        <div class="alert alert-success">
                            {{session("message")}}
                        </div>

                    @endif
                    <div class="card w-100">
                        <img src="{{$animal->image_url}}" class="card-img-top " alt="{{$animal->name}}" style="max-height: 600px; object-fit: contain;" >
                        <div class="card-body">
                            <h5 class="card-title">{{$animal->name}}</h5>
                            <p class="card-text">{{$animal->description}}</p>
                            <p>Species : {{$animal->species}}</p>
                            <p>Breed : {{$animal->breed}}</p>
                            <p>Weight : {{$animal->weight}} Kg</p>
                        </div>
                    </div>
                </article>
                <a class="btn btn-success w-25 mt-2 m-auto" href="{{route("animals.index")}}">Return To INDEX</a>
            </div>
        </div>
    </main>


@endsection

@section('custom-scripts')
    @vite('resources/js/add-confirm.js')
@endsection
