<?php
    require_once("config.php");


    //Carrega somente um usuario
   // $root = new Usuario();
   // $root->loadById(1);
//  echo $root;

//Carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("o");
//echo json_encode($search);

//carrega um usuario usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("user","123456");
//echo $usuario;

//Criando um novo usuario
//$aluno = new Usuario("Monster","M0N573R");
//$aluno->insert();
//echo $aluno;

//Editando pelo comando Update
/*$usuario = new Usuario();
$usuario->loadById(8);

$usuario->update("Dgo","789456");
echo $usuario;*/


$usuario = new Usuario();

$usuario->loadById(8);

$usuario->delete();




echo $usuario;
?>