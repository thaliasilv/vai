<html>
    <head>
        <title>template MVC</title>
        <base href="<?= URL_BASE ?>"><!--Esta instrução é super importante e não deve ser mudada!-->

        <link rel="stylesheet" href="./publico/css/semantic.min.css">
         <link rel="stylesheet" href="./publico/css/semantic.js.url">       
           <link rel="stylesheet" href="./publico/css/semantic.min.css.url">
        <link rel="stylesheet" type="text/css" href="semantic.min.js.url">
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" type="text/css" href="detalhes.css">
	<link rel="stylesheet" type="text/css" href="login.html">
	<link rel="stylesheet" type="text/css" href="ca_produto.html">
	<link rel="stylesheet" type="text/css" href="cadrastro_cliente.html">
	<link rel="stylesheet" type="text/css" href="car.html">
	<link rel="stylesheet" type="text/css" href="administrador.html">
	<meta charset="utf-8">
	<link rel="shortcut icon" type="image/x-png" href="imagens/logo2.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <link rel="stylesheet" href="./publico/css/app.css">
        <style>
        .mySlides {display:none;}
        </style>


    </head>
    <body class="container">
<?php include ('cabecalho.php') ?>
        <main class="container">
            <?php require $viewFilePath; ?>
        </main>

    </body>
</html>
