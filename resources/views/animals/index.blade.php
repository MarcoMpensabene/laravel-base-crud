
@extends('layouts.app')

@section('page-title' , 'Home')

@section('main-content')

    <main>
         <h1 class="text-center">ANIMAL INDEX</h1>

        <div class="container">
            <div class="row">
                <article class="col-12">
                    @if (session("message"))
                    <div class="alert alert-primary">
                        {{session("message")}}
                    </div>

                @endif
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
                                <th >{{$animal->id}}</th>
                                <th >{{$animal->name}}</th>
                                <th >{{$animal->species}}</th>
                                <th >{{$animal->breed}}</th>
                                <th >{{$animal->image_url}}</th>
                                <th >{{$animal->weight}}</th>
                                <th >{{$animal->description}}</th>
                                <th>
                                    <div class="d-flex">
                                        <a class="btn btn-primary btn-sm me-1" href={{route("animals.show" , $animal)}}>View</a>
                                        <a class="btn btn-warning btn-sm me-1" href="{{route("animals.edit" , $animal)}}">Edit</a>
                                        <form action="{{route("animals.destroy" , $animal)}}" method="POST" class="delete-form">
                                            @method("DELETE")
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </th>
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

@section('custom-scripts')
    @vite('resources/js/delete-confirm.js')
@endsection
