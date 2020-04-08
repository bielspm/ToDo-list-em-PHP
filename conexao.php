<?php 
$host = 'localhost';
$usuario = 'root';
$senha = '';
$db = 'tarefas';
$port = '3306';

$conexaoDB = mysqli_connect($host,$usuario,$senha,$db,$port);

if ($conexaoDB->connect_errno)
    echo 'Falha na conexão: ('.$conexaoDB->connect_errno.')';

$data1 = $descricao = $nometarefa = '';

//Função que irá validar a entrada do usuario
function validar_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  //Criação dos dados na tabela
if ($_POST){
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $descricao = validar_input($_POST["descricao"]);
    $nometarefa = validar_input($_POST["nometarefa"]);
    $data1 = validar_input($_POST["data1"]);

    // criar dados na tabela
    $conexaoDB->query("INSERT INTO tarefas.tarefa(nome,descricao,dataa) VALUES('$nometarefa','$descricao','$data1')");
    }
    
};
//Deleta os dados no banco de dados   
if ($_GET){
    if($_SERVER["REQUEST_METHOD"] == "GET") {
        $id = validar_input($_GET["id"]);
        $conexaoDB->query("DELETE FROM tarefa WHERE id = $id ");
    }
};

//Recuperação dos dados no banco de dados
$buscar_tarefa= 'SELECT id,nome,descricao,dataa FROM tarefas.tarefa';
$resultado = mysqli_query($conexaoDB,$buscar_tarefa);
//$resultado1 = mysqli_fetch_assoc($resultado);

?>
