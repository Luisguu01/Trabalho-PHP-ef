<?php
$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];

include 'conexao.php';

$sql = "INSERT INTO tarefas (titulo, descricao) VALUES ('$titulo', '$descricao')";

if ($conn->query($sql) === TRUE) {
    echo "Nova tarefa adicionada com sucesso";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();

// Redirecionar de volta para index.php após a adição da tarefa
header("Location: index.php");
exit();
?>
