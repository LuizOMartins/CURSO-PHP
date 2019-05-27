<?php 

require_once("config.php");

/*$sql =  new sql();
$usuarios = $sql->select("SELECT * FROM  tb_usuarios");

echo json_encode($usuarios);
*/

//Carrega um usuário

// $root = new Usuario();
// $root->loadbyId(2);
// echo "<pre>";
// echo  $root;

//Carrega uma lista de usuários
// $lista = Usuario::getList();
// echo "<pre>";
// echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
// $search = Usuario::search("lu");
// echo json_encode($search);

// carrega um usuário usando o login e a senha
// $usuario = new Usuario();
// $usuario->login("luiz", "123458");

//echo $usuario;

//Criando um novo usuário
// $aluno = new Usuario("aluno", "@lun0"); //metodo construtor inserindo dados direto
// $aluno->insert();
// echo $aluno;


//Alterar um usuário
// $usuario = new Usuario();
// $usuario->loadById(8); //carregando pelo ID
// $usuario->update("professor", "!@#$%¨&*");
// echo $usuario;


echo "<pre>";
$usuario = new Usuario();
$usuario->loadById(9);
$usuario->delete();
echo $usuario;

?>