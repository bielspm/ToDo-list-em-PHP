<?php 
$host = 'localhost';
$usuario = 'root';
$senha = 'CounterSTRIKE15';
$db = 'tarefas';
$port = '3306';

$conexaoDB = mysqli_connect($host,$usuario,$senha,$db,$port);

if ($conexaoDB->connect_errno)
    echo 'Falha na conexão: ('.$conexaoDB->connect_errno.')';

$data1 = $descricao = $nometarefa = '';

if ($_POST){
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $descricao = $_POST["descricao"];
    $nometarefa = $_POST["nometarefa"];
    $data1 = $_POST["data1"];
    // criar dados na tabela
    $conexaoDB->query("INSERT INTO tarefas.tarefa(nome,descricao,dataa) VALUES($nometarefa,$descricao,$data1)");
    }
    
};
   
if ($_GET){
    if($_SERVER["REQUEST_METHOD"] == "GET") {
        $id = $_GET["id"];
        $nometarefa2 = $_GET["nometarefa2"];
        $conexaoDB->query("DELETE FROM tarefa WHERE id = $id ");
    }
};

$buscar_tarefa= 'SELECT * FROM tarefas.tarefa';
$resultado = mysqli_query($conexaoDB,$buscar_tarefa);
//$resultado1 = mysqli_fetch_array($resultado);


?>
