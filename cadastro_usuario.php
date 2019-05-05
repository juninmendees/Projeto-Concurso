<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cadastro de usuario</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css\estilo.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<?php
/**
 * Created by PhpStorm.
 * User: Luis Mendes
 * Date: 01/04/2019
 * Time: 23:30
 */
?>
<body>

<div class="container">

    <form action="login.php" method="post">
        <h1 class="text-center">CADASTRO DE USUARIO</h1>

        <div class="form-group">
            <input type="login" class="form-control" id="login"  placeholder="Digite seu login">
        </div>

        <div class="form-group">
            <input type="email" class="form-control" id="email"  placeholder="Digite seu email">
        </div>

        <div class="form-group  fullwidth">
            <input type="password" class="form-control" id="inputPassword" placeholder="Digite sua senha">
        </div>

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="status" id="status" value="ativo">
            <label class="form-check-label" for="ativo">Ativo</label>


            <input class="form-check-input" type="radio" name="status" id="status" value="inativo">
            <label class="form-check-label" for="inativo">Inativo</label>
        </div>

        <button type="button" class="btn btn-dark fullWidth">Log In</button>
    </form>


</div>

</body>
</html>
