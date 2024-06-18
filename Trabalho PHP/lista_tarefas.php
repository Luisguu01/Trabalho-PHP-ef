
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tarefas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Lista de Tarefas</h2>
        <ul class="list-group mt-3">
            <?php
            include 'conexao.php';
            $sql = "SELECT * FROM tarefas ORDER BY data_criacao DESC";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '<li class="list-group-item">';
                    echo '<h5>' . $row["titulo"] . '</h5>';
                    echo '<p>' . $row["descricao"] . '</p>';
                    echo '<small>' . $row["data_criacao"] . '</small>';
                    echo '</li>';
                }
            } else {
                echo '<li class="list-group-item">Nenhuma tarefa encontrada.</li>';
            }

            $conn->close();
            ?>
        </ul>
    </div>
</body>
</html>
