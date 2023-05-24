<html>

<head>
<title>Lista de Turmas</title>
</head>
<body>
<h1>Lista de Turmas</h1>

<table border="1">
<?php
ini_set("display_errors", 1);
header('Content-Type: text/html; charset=iso-8859-1');


$servername = "db";
$username = "root";
$password = "Senha123";
$database = "dio_mysql";

// Criar conexão


$link = new mysqli($servername, $username, $password, $database);

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$query = "SELECT turmas.id AS id, instrutores.nome AS nome, cursos.nome AS curso, turmas.data_inicio AS data_inicio, turmas.data_final AS data_final, turmas.carga_horaria AS carga_horaria FROM turmas INNER JOIN instrutores ON turmas.instrutores_id = instrutores.id INNER JOIN cursos ON turmas.cursos_id=cursos.id";

if ($result = mysqli_query($link, $query)) {
   
    printf("<tr><td><b>ID</b></td><td><b>INSTRUTOR</b></td><td><b>CURSO</b></td><td><b>D.INICIO</b></td><td><b>D.FINAL</b></td><td><b>CARGA HORÁRIA</b></td></tr>");    
    
    while ($row = mysqli_fetch_assoc($result)) {
        printf("<tr>");
        printf("<td>%d</td>", $row["id"]);
        printf("<td>%s</td>", $row["nome"]);
        printf("<td>%s</td>", $row["curso"]);
        printf("<td>%s</td>", $row["data_inicio"]);
        printf("<td>%s</td>", $row["data_final"]);
        printf("<td>%s</td>", $row["carga_horaria"]);
	printf("</tr>");
//        printf ("%d - %-11s - %-50s - %-50s - %-14s - %s <br>", $row["id"], $row["cpf"], $row["nome"], $row["email"], $row["fone"],$row["data_nascimento"]);
    }

    
    mysqli_free_result($result);
}


mysqli_close($link);

?>
</body>
</table>
</html>
