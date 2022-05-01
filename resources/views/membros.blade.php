
@extends('layouts.main')

@section('title','ecompjr')

@section('content')
<head>
<link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="/css/style_membros.css">
</head>
<body>
<div id="search-container" class="col-md-12">
    <h1>Busca de membros</h1>
    <form action="/membros/" method="GET">
        <input type="text" id="search" name="search" class = "form-control" placeholder ="Digite uma busca"> 
    </form>
</div>
<div id="events-container" class="col-md-12">
    <h2>Membros</h2>

<div id="cards-container" class="row">
    @foreach($membross as $membro)
    
   
    <div class="card col-md-3">
     <div class="card-body">
        <h5 class="card-title">{{$membro->nome}}</h5> 
        <h6 class="card-title">{{$membro->cargo}}</h6>
     </div>   
    </div>

     @endforeach 

     

    
</div>
</div>
</body>
<footer>
    <p>Desenvolvido por Mailson Alves</p>
</footer>
@endsection