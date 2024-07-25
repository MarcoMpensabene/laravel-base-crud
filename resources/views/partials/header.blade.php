<header>
    <nav class="navbar navbar-expand-lg  bg-primary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">HOME</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route("animals.index")}}">AnimalsList</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('animals.create')}}">AddAnimal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('animals.deleted-index')}}">DeletedAnimal</a>
                </li>
            </ul>
        </div>
        </div>
      </nav>
</header>
