<?php

function conn() {
    $cnx = mysqli_connect("localhost","id9946989_thaliasilv", "bazarty123", "id9946989_bazarty");
    if (!$cnx) die('Deu errado a conexao!');
    return $cnx;
}