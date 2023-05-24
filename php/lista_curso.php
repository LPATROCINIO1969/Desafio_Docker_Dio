<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<title>Lista de Cursos</title>
</head>

<body>
<h1>Lista de Cursos</h1>
<table border="1">

<?php
ini_set("display_errors", 1);
//header('Content-Type: text/html; charset=iso-8859-1');


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

$query = "SELECT * FROM cursos";

if ($result = mysqli_query($link, $query)) {

    printf("<tr><td><b>ID</b></td><td><b>NOME</b></td><td><b>CARGA HORÁRIA</b></td><td><b>PREÇO</b></td></tr>");    
    while ($row = mysqli_fetch_assoc($result)) {
        printf("<tr>");
	printf("<td>%d</td>", $row["id"] );
	printf("<td>%s</td>", $row["nome"]);
	printf("<td>%d</td>", $row["carga_horaria"]);
	printf("<td>%6.2f</td>", $row["preco"]);
	printf("</tr>");
//        printf ("%d - %50s - %d - R$ %8.2f <br>", $row["id"], $row["nome"], $row["carga_horaria"], $row["preco"]);
    }

    
    mysqli_free_result($result);
}


mysqli_close($link);

?>
</table>
</body>
</html>
