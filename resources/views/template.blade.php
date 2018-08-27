<!DOCTYPE html>
<html>
    <head>
        <title> @yield("titre") </title>
        <meta charset="utf-8">
    
        {{-- css --}}
       {{ Html::style('css/bootstrap.css') }}
       {{ Html::style('css/mdb.css') }}
       {{ Html::style('css/style.css') }}
    </head>

    <body>
        <header>
            {{-- debut menu --}}
            <nav class="navbar navbar-expand-sm navbar-dark menu fixed-top">
                {{-- logo --}}
                <a href="#" class="navbar-brand">
                    <img src="{{ asset('img/logo.jpeg') }}" class="logo"/>
                </a>
                {{-- logo --}}

                {{-- bouton pour le responsive  --}}
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navpart" >
                    <span>Menu</span>
                </button>
                {{-- bouton pour le responsive  --}}
  
                 {{-- la menu de navigation  --}}
                <div class="collapse navbar-collapse" id="Navpart">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                            <a href="{{route('apropos')}}" class="nav-link active lienMenu">A propos</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('service')}}" class="nav-link lienMenu">Nos Services</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('livres')}}" class="nav-link lienMenu">Livres</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link lienMenu" href="{{route('contact')}}">Contact</a>
                            </li>
                        </ul>
                </div>
                 {{-- la menu de navigation  --}}
            </nav>
            {{-- fin menu --}}
        </header>

        {{-- contenu des pages ici --}}
        <main class="mb-3 mainPart">
            <div class="mt-5 container">
                @yield('contenu')
            </div> 
        </main>
        {{-- contenu des pages ici --}}

        {{-- debut footer --}}
        <footer>
            <hr/>
            <div class="my-3" style="border-bottom:green 10px solid'border-top:green 10px solid">
                <center>
                     &copy; Copyright @php  echo date("Y"); @endphp | Site web conçu par <a href="https://www.hotshi.com">Hotshi</a>
                </center>
            </div>
        </footer>
        {{-- fin footer --}}

        {{-- javscript --}}
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/mdb.js') }}"></script>
    <script src="{{ asset('js/fontawesome.js') }}"></script>
    

    <body>
</html>




