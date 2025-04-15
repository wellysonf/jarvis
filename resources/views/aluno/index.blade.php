<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        @csrf
        <input type="text" name="nome" id="nome" placeholder="Informe o nome">
        <input type="text" name="matricula" id="matricula" placeholder="Informe a matricula">
        <input type="text" name="curso" id="curso" placeholder="Informe o curso">
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>
