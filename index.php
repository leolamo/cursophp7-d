<?php

require_once("config.php");

/*
//Carrega um usuário apenas:
$root = new Usuario();
$root->loadById(1);
echo $root;
*/

//Carrega uma lista de usuários
/*$lista = Usuario::getList();
echo json_encode($lista);
*/

//Carrega uma lista de usuários buscando pelo login, porém com 1 letra que aparece no login
/*$search = Usuario::search("m");
echo json_encode($search);*/

//Carrega um usuário se login e senha estiver correto;
/*
$usuario = new Usuario();
$usuario->login("lamo","dragon");
echo $usuario;
*/

//Inserir usuário novo
/*
$aluno = new Usuario("alunoz", "@lun0");
$aluno->insert();
echo $aluno;
*/

$usuario = new Usuario();

$usuario->loadById(50);

$usuario->update("professor", "!@#$%^&");

echo $usuario;






/*
$sql = new Sql();

$usuarios = $sql->select("SELECT * from tb_usuarios");

echo json_encode($usuarios);
*/

?>