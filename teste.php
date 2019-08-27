<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel='stylesheet' href="style.css">
</head>
<body>
    <div id="titulo" class="row">
    <h1>TAREFAS</h1>
    <?php
    require('ToDo-list/conexao.php')
    ?>
    </div>

    <div class="row">

    <div id='div-esquerda' class="col-6">
        <h2>Lista de tarefas</h2>
    </div>
    <div id='div-direita' class="col-6">
    <button id="btn-adicionar" onclick="abrirAdicionar()" ondblclick="fecharAdicionar()">Adicionar Tarefa</button>
    <div id='div-form-adicionar' class="div-form">
        <form method="POST" action="teste.php">
            <div class="div-label">
                <label>Nome da tarefa:</label>
            </div>
            <div>
                <input type="text" name='nometarefa'>
            </div>
            <div class="div-label">
                <label>Descrição:</label>
            </div>
            <div>
                <textarea name="descricao"></textarea>
            </div>
            <div class="div-label">
                <label>Data:</label>
            </div>
            <div>
                <input type="date" name='data1'>
            </div>
            <input type='submit'>
        </form>
    </div>
    <button id="btn-retirar" onclick="abrirRetirar()" ondblclick="fecharRetirar()">Retirar tarefa</button>
    <div id='div-form-retirar' class="div-form">
        <form method="GET" action="teste.php">
            <div class="div-label">
                <label>Nome da tarefa:</label>
            </div>
            <div>
                <input type="text" name="nometarefa2">
            </div>
            <div class="div-label">
                <label>ID da tarefa:</label>
            </div>
            <div>
                <input type="number" name="id">
            </div>
            <input type="submit"> 
        </form>
    </div>
    </div>
 
    </div>
    <script>
        function abrirAdicionar(){
            document.getElementById('div-form-adicionar').style.display = 'block';
        }
        function fecharAdicionar(){
            document.getElementById('div-form-adicionar').style.display = 'none';
        }
        function abrirRetirar(){
            document.getElementById('div-form-retirar').style.display = 'block';
        }
        function fecharRetirar(){
            document.getElementById('div-form-retirar').style.display = 'none';
        }
    </script>
</body>
</html>
