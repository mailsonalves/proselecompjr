@extends('layouts.main')

@section('title','Cadastro de membro - ecompjr')

@section('content')
@auth
<head>
<link rel="stylesheet" href="/css/style_membros.css">
<link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<div id="search-container" class="col-md-12">
    <h1>Cadastro de membros</h1>
    <form action="/membros" method = "POST">
    @csrf
    <div class="form-group">
        <label for="title"></label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome"> 
    </div> 
    <div class="form-group">
        <label for="title"></label>
        <input type="text" class="form-control" id="cargo" name="cargo" placeholder="Digite o cargo"> 
    </div> 
    <div class="btn"><input type="submit" class="btn btn-primary" value="Cadastrar">  </div>
    
    </form>
</div>
@endauth
@guest
<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Sem permissão de acesso</h1>
    <form action="/membros" method = "POST">
   
@endguest
@endsection