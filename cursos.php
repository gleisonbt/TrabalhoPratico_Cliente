<!DOCTYPE html>
<html>
<head>
    <title>Gerenciar Cursos</title>
</head>
<body>
    <h1>Cursos</h1>
    <a href="criar_curso.php">Criar Curso</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
        </tr>
        <?php
        $api_url = 'http://127.0.0.1:5000/cursos';
        $cursos = json_decode(file_get_contents($api_url));

        foreach ($cursos as $curso) {
            echo "<tr>";
            echo "<td>{$curso->id}</td>";
            echo "<td>{$curso->nome}</td>";
            echo "</tr>";
        }
        ?>
    </table>
    <a href="index.php">Voltar</a>
</body>
</html>
