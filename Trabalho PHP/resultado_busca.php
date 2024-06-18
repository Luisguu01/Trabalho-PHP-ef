<?php
// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Inclui o arquivo de conexão com o banco de dados
    include 'conexao.php';

    // Inicializa variáveis para armazenar os valores dos campos do formulário
    $palavra_chave = $_GET['palavra_chave'] ?? '';
    $data_inicio = $_GET['data_inicio'] ?? '';
    $data_fim = $_GET['data_fim'] ?? '';
    $prioridade = $_GET['prioridade'] ?? '';

    // Prepara a consulta SQL 
    $sql = "SELECT * FROM tarefas WHERE 1";

    // Adiciona as condições da busca 
    if (!empty($palavra_chave)) {
        $sql .= " AND (titulo LIKE '%$palavra_chave%' OR descricao LIKE '%$palavra_chave%')";
    }
    if (!empty($data_inicio)) {
        $sql .= " AND data_criacao >= '$data_inicio'";
    }
    if (!empty($data_fim)) {
        $sql .= " AND data_criacao <= '$data_fim'";
    }
    if (!empty($prioridade)) {
        $sql .= " AND prioridade = '$prioridade'";
    }

    // Executa a consulta SQL
    $result = $conn->query($sql);

    // ve se tem dados encontrados
    if ($result->num_rows > 0) {
        echo '<div class="container mt-5">';
        echo '<h2 class="text-center">Resultados da Busca</h2>';
        echo '<ul class="list-group mt-3">';
        while($row = $result->fetch_assoc()) {
            echo '<li class="list-group-item">';
            echo '<h5>' . $row["titulo"] . '</h5>';
            echo '<p>' . $row["descricao"] . '</p>';
            echo '<small>Data de Criação: ' . $row["data_criacao"] . '</small>';
            echo '</li>';
        }
        echo '</ul>';
        echo '</div>';
    } else {
        echo '<div class="container mt-5">';
        echo '<h2 class="text-center">Nenhum resultado encontrado</h2>';
        echo '</div>';
    }

    // se caso acontecer alguma falha
    $conn->close();
}
?>
