<<?php 

require_once("config.php");

# carrega um usuario
//$root = new Usuario();
//$root->loadbyId(1);
//echo $root;

# carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

# Carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("o");
//echo json_encode($search);

# carrega um usuario usando login e senha
//$usuario = new Usuario();
//$usuario->login("jojo", "123456");
//echo $usuario;

# criando um usuario
//$aluno = new Usuario("aluno", "@lun0");
//$aluno->insert();
//echo $aluno;


# alterar um usuario
//$usuario = new Usuario();
//$usuario->loadbyId(7);
//$usuario->update("professor", "profe");
//echo $usuario;

# deletar um suario
$usuario = new Usuario();

$usuario->loadbyId(7);

$usuario->delete();

echo $usuario;

?>