<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Larablog - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous" defer></script>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('home') }}">Pokemon</a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a href="{{ route('home') }}" class="nav-link" aria-current="page">
                                Accueil
                            </a>
                        </li>
                        @auth
                            <li class="nav-item">
                                <a href="#" class="nav-link">Nouveau pokemon</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('users.logout') }}" class="nav-link">Déconnexion</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a href="{{ route('users.create') }}" class="nav-link">Inscription</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('users.login') }}" class="nav-link">Connexion</a>
                            </li>
                        @endauth
                    </ul>
                    <span class="navbar-text">
                    </span>
                </div>
                
                
                <form action="<?= url('/') ?>" id="search-form" class="d-flex">
                    <select name="lang" id="lang" class="form-control me-2">
                        
                        <option value=""></option>
                        
                    </select>
                    
                    <input name="search" class="form-control me-2" type="search" placeholder="Pokemon à rechercher" aria-label="Pokemon à rechercher">
                    <button class="btn btn-primary" type="submit">Rechercher</button>
                </form>
                
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
    </header>
    
    <main class="container my-3">
        @yield('content')
    </main>
</body>
</html>