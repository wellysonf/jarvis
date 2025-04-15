<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produto</title>
</head>
<body>
    <h1>Página de produtos</h1>
    <form action="{{ route('prod') }}" method="post">
        @csrf
        <input type="text" name="descricao" id="" placeholder="Descricao">
        <input type="text" name="estoque" id="" placeholder="Estoque">
        <input type="text" name="valor" id="" placeholder="Valor">
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>
