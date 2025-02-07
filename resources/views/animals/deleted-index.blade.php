
@extends('layouts.app')

@section('page-title' , 'DELETED ANIMAL INDEX')

@section('main-content')

    <main>
         <h1 class="text-center">DELETED ANIMAL INDEX</h1>

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
                                        <form action="{{route("animals.restore" , $animal)}}" method="POST" class="me-2">
                                            @method("PATCH")
                                            @csrf
                                            <button type="submit" class="btn btn-success">Restore</button>
                                        </form>
                                        <form action="{{route("animals.permanent-delete" , $animal )}}" method="POST" class="delete-form">
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
