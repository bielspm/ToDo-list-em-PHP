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
     <?php
     require('conexao.php')
     ?>
    <h1>TAREFAS</h1>
    </div>
    <div class="row">
        <div id='div-esquerda' class="col-6 p-top">
            <h2>Lista de tarefas</h2>
            <div id='table-div'>
                <table>
                    <th>
                        <p>ID</p>
                    </th>
                    <th>
                        <p>Nome da tarefa</p>
                    </th>
                    <th>
                        <p>Descricao</p>
                    </th>
                    <th>
                        <p>Data</p>
                    </th>
                        <?php
                        if($resultado){
                            while($row = mysqli_fetch_assoc($resultado)){
                                echo '<tr>';
                                echo '<td>' . $row["id"] . '</td>';
                                echo '<td>' . $row["nome"] . '</td>';
                                echo '<td>' . $row["descricao"] . '</td>';
                                echo '<td>' . $row["dataa"] . '</td>';
                                echo '</tr>';
                            }
                        }
                        ?>
                </table>
            </div>
        </div>
        <div id='div-direita' class="col-6 p-top">
            <button id="btn-adicionar" onclick="abrirAdicionar()" ondblclick="fecharAdicionar()">Adicionar Tarefa</button>
            <div id='div-form-adicionar' class="div-form">
                <form method="POST" action="conexao.php">
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
                <form method="GET" action="conexao.php">
                    <div class="div-label">
                        <label>Nome da tarefa:</label>
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
