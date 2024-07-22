
@extends('layouts.app')

@section('page-title' , 'Home')

@section('main-content')

    <main>
         <h1 class="text-center">Single Animal</h1>
        <div class="container">
            <div class="row">
                <article class="col-12">
                    <div class="card w-100">
                        <img src="{{$animal->image_url}}" class="card-img-top" alt="{{$animal->name}}">
                        <div class="card-body">
                            <h5 class="card-title">{{$animal->name}}</h5>
                            <p class="card-text">{{$animal->description}}</p>
                            <p>Species : {{$animal->species}}</p>
                            <p>Breed : {{$animal->breed}}</p>
                            <p>Weight : {{$animal->weight}}</p>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </main>


@endsection
