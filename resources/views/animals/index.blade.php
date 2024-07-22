
@extends('layouts.app')

@section('page-title' , 'Home')

@section('main-content')

    <main>
         <h1 class="text-center">ANIMAL INDEX</h1>

        <div class="container">
            <div class="row">
                <article class="col-12 table-responsive">
                    <table class="table align-middle table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Species</th>
                                <th scope="col">Breed</th>
                                <th scope="col">ImgUrl</th>
                                <th scope="col">Weight</th>
                                <th scope="col">Description</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                        @foreach ($animals as $animal)
                            <tr>
                                <th>{{$animal->id}}</th>
                                <th>{{$animal->name}}</th>
                                <th>{{$animal->species}}</th>
                                <th>{{$animal->breed}}</th>
                                <th style="width: 15%">{{$animal->image_url}}</th>
                                <th>{{$animal->weight}}</th>
                                <th style="width: 30%">{{$animal->description}}</th>
                                <th><a class="btn btn-primary btn-sm" href={{route("animals.show" , $animal)}}>View</a></th>
                            </tr>
                        @endforeach
                        </tbody>
                      </table>
                </article>
            </div>
        </div>



         {{-- @dump($animals) --}}
    </main>

@endsection
