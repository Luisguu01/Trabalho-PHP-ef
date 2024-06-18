<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atarefador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Cadastrador de Tarefas</h1>
        
     
        <form action="adiciona_tarefa.php" method="POST" class="mt-4">
            <div class="form-group">
                <label for="titulo">Título</label>
                <input type="text" class="form-control" id="titulo" name="titulo" required>
            </div>
            <div class="form-group">
                <label for="descricao">Descrição</label>
                <textarea class="form-control" id="descricao" name="descricao"></textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Adicionar Tarefa</button>
            
        </form>

        <div class="container mt-5">
        <h1 class="text-center">Lista De Tarefas</h1>
        <div class="text-center">
            <a href="lista_tarefas.php" target="_blank" class="btn btn-primary">Ver Lista de Tarefas</a>
            <a href="busca_avancada.php" target="_blank" class="btn btn-primary">Busca Avançada</a>
        </div>
    </div>
    
       
    </div>
</body>
</html>
