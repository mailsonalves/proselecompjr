<link rel="stylesheet" href="/css/style.css">
<link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>


<header>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="collapse navbar-collapse" id="navbar">
            <a href="/dashboard" class="navbar-brand">
            <img src="{{ asset('images/logoNome.png') }}" alt="Logo Ecompjr" width="150x" id= "img">
            </a>
            
            <ul class="navbar-nav">
                @auth
                <li class="nav-item">
                    <a href="/membros/create" class="nav-link">Cadastrar Membro Ecompjr</a>
                </li>
                
                @endauth
                @guest
                <li class="nav-item">
                    <a href="/login" class="nav-link">Login</a>
                </li>
                <li class="nav-item">
                    <a href="/register" class="nav-link">Cadastrar</a>
                </li>
                @endguest
                <li class="nav-item">
                    <a href="/membros" class="nav-link">Membros</a>
                </li>
                @auth
                <li class="nav-item">
                    <form action="/logout" method="POST">
                    @csrf
                    <a href="/logout" class="nav-link" onclick="event.preventDefault();
                    this.closest('form').submit();"> Sair </a>
                    </form>
                </li>
                @endauth
                
            </ul>
        </div>
    </nav>
    </header>