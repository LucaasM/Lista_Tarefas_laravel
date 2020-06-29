<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a href="" class="navbar-brand">LaraDev</a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href=" {{ route('property.index') }}" class="nav-link"> Listar todos os imoveis </a></li>
            <li class="nav-item"><a href=" {{ route('property.create') }}" class="nav-link"> Cadastra novo imovel no sistema </a> </li>
        </ul>
    </div>

</nav>

@yield('content')


</body>
</html>
