<?php

require_once("config.php");

$root = new Usuario();

$root->loadById(1);

echo $root;



/*
$sql = new Sql();

$usuarios = $sql->select("SELECT * from tb_usuarios");

echo json_encode($usuarios);
*/

?>