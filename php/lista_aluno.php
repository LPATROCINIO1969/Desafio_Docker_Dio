<html>

<head>
<title>Lista de Alunos</title>
</head>
<body>
<h1>Lista de Alunos</h1>

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

$query = "SELECT * FROM aluno";

if ($result = mysqli_query($link, $query)) {
   
    printf("<tr><td><b>ID</b></td><td><b>CPF</b></td><td><b>NOME</b></td><td><b>EMAIL</b></td><td><b>FONE</b></td><td><b>DATA_NASCIMENTO</b></td></tr>");    
    
    while ($row = mysqli_fetch_assoc($result)) {
        printf("<tr>");
        printf("<td>%d</td>", $row["id"]);
        printf("<td>%s</td>", $row["cpf"]);
        printf("<td>%s</td>", $row["nome"]);
        printf("<td>%s</td>", $row["email"]);
        printf("<td>%s</td>", $row["fone"]);
        printf("<td>%s</td>", $row["data_nascimento"]);
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
