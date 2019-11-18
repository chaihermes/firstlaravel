<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <!--(8) aqui é a view da tabela, depois do controller-->
    @foreach($listaCidades as $cidade)
        <h2>{{$cidade->nome}}</h2>
    @endforeach
</body>
</html>