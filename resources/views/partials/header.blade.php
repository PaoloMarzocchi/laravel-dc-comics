<header>
    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <div class="nav navbar-nav mx-auto">
            <a class="nav-item nav-link {{Route::currentRouteName() == 'home' ? 'active' : '' }}" href="{{route('home')}}" aria-current="page">
                Home <span class="visually-hidden">(current)</span>
                </a>
            <a class="nav-item nav-link {{Route::currentRouteName() == 'comics.create' ? 'active' : '' }}" href="{{route('comics.create')}}">Add new comic</a>
        </div>
    </nav>
    
</header>