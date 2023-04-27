<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title')</title>


    {{-- fonte --}}

    <link href="https://fonts.googleapis.com/css2?family=Poppins" rel="stylesheet">

    {{-- bootstrap --}}
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


    {{-- aplicação --}}

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="collapse navbar-collapse" id="navbar">
        <a href="/" class="navbar-brand">
          <img src="/css/images/logo.png" alt="Agenda de Contatos">
        </a>
    </nav>
  </header>
<main>
    <div class="container-fluid">
      <div class="row">
        @if(session('msg'))
          <p class="msg">{{ session('msg') }}</p>
        @endif
        @yield('content')
      </div>
    </div>
  </main>
  <footer>
    <p>Agenda virtual &copy; 2022</p>
  </footer>
</body>
</html>
