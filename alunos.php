<!DOCTYPE html>
<html>
<head>
    <title>Gerenciar Alunos</title>
</head>
<body>
    <h1>Alunos</h1>
    <a href="criar_aluno.php">Criar Aluno</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Idade</th>
            <th>Curso ID</th>
        </tr>
        <?php
        $api_url = 'http://127.0.0.1:5000/alunos';
        $alunos = json_decode(file_get_contents($api_url));

        foreach ($alunos as $aluno) {
            echo "<tr>";
            echo "<td>{$aluno->id}</td>";
            echo "<td>{$aluno->nome}</td>";
            echo "<td>{$aluno->idade}</td>";
            echo "<td>{$aluno->curso_id}</td>";
            echo "</tr>";
        }
        ?>
    </table>
    <a href="index.php">Voltar</a>
</body>
</html>
