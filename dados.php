<?php 
//conexão 
$link = mysqli_connect("localhost", "root", "","franqueadovisone");

// checar conexão
if ($link -> connect_errno) {
  echo "Falha ao se conectar ao banco de dados: " . $mysqli -> connect_error;
  exit();
}
else{
  echo "Sucesso ao se conectar ao banco de dados";
}


//Variáveis

$nome = $_POST["nome"];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$expedidor = $_POST['expedidor'];
$idade = $_POST['idade'];
$escolaridade = $_POST['escolaridade'];
$curso = $_POST['curso'];
$outros_cursos = $_POST['outros-cursos'];
$profissao = $_POST['profissao'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];
$email = $_POST['email'];

//selecionar o banco de dados
$banco = mysqli_select_db($link,'cadastro'); // nome do banco onde os dados serão armazenados;

//inserir ao db
$dados = mysqli_query($link, "INSERT INTO `cadastro`(`nome`, `cpf`, `rg`, `expedidor`, `idade`, `sexo`, `escolaridade`, `curso`, `outros-cursos`, `profissao`, `cidade`, `uf`, `email`)  
VALUES ('$nome', '$cpf', '$rg', '$expedidor', '$idade', '$escolaridade', '$curso', '$outros_cursos', '$profissao', '$cidade' ,'$uf', '$email')");

echo $nome, $cpf, $rg, $expedidor, $idade, $escolaridade, $curso, $outros_cursos, $profissao, $cidade ,$uf , $email; 
?>
