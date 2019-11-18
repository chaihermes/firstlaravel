<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <h1>Página Home</h1>

    <!-- foreach pra buscar todos os usuários do banco de dados. -->
    @foreach($listaUsuarios as $usuario) <!--variável que estamos recebendo da view. Recebe a associação ('')-->
        <h2>{{$usuario->nome}}</h2> <!--padrão mustache pra gerar a lista de usuários na tela.-->
    @endforeach


    

</body>
</html>