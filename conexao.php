<?php 
$host = 'localhost';
$usuario = 'root';
$senha = '';
$db = 'tarefas';

$conexaoDB = @mysqli_connect($host,$usuario,$senha,$db);

if ($conexaoDB->connect_errno)
    echo 'Falha na conexão: ('.$conexaoDB->connect_errno.')';

$data1 = $descricao = $nometarefa = '';

if ($_POST){
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $descricao = $_POST["descricao"];
    $nometarefa = $_POST["nometarefa"];
    $data1 = $_POST["data1"];
    // criar dados na tabela
    $conexaoDB->query('INSERT INTO tarefa(nome,descricao,dataa) VALUES($nometarefa,$descricao,$data1)');
    }
};
   
if ($_GET){
    if($_SERVER["REQUEST_METHOD"] == "GET") {
        $id = $_GET["id"];
        $nometarefa2 = $_GET["nometarefa2"];
        $conexaoDB->query('DELETE FROM tarefa WHERE id = $id ');
    }
};
$pegartarefas = 'SELECT * FROM tarefas';
$resultado = @mysqli_fetch()



?>
