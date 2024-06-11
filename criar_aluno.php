<!DOCTYPE html>
<html>
<head>
    <title>Criar Aluno</title>
</head>
<body>
    <h1>Criar Aluno</h1>
    <form method="POST" action="">
        Nome: <input type="text" name="nome"><br>
        Idade: <input type="number" name="idade"><br>
        Curso ID: <input type="number" name="curso_id"><br>
        <input type="submit" value="Criar Aluno">
    </form>
    <a href="alunos.php">Voltar</a>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $data = [
            'nome' => $_POST['nome'],
            'idade' => $_POST['idade'],
            'curso_id' => $_POST['curso_id']
        ];

        $options = [
            'http' => [
                'header'  => "Content-type: application/json\r\n",
                'method'  => 'POST',
                'content' => json_encode($data),
            ],
        ];
        $context  = stream_context_create($options);
        $result = file_get_contents('http://127.0.0.1:5000/alunos', false, $context);
        
        if ($result === FALSE) {
            echo 'Erro ao criar aluno!';
        } else {
            header('Location: alunos.php');
        }
    }
    ?>
</body>
</html>