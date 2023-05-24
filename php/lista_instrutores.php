<html>

<head>
<title>Lista de Instrutores</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
</head>

<body>
<h1>Lista de Instrutores</h1>
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

$query = "SELECT * FROM instrutores";

if ($result = mysqli_query($link, $query)) {

    printf("<tr><td><b>ID</b></td><td><b>NOME</b></td><td><b>EMAIL</b></td><td><b>VALOR_HORA</b></td></tr>");    
    while ($row = mysqli_fetch_assoc($result)) {
	printf("<tr>");
	printf("<td>%d</td>",$row["id"]);
	printf("<td>%s</td>",$row["nome"]);
	printf("<td>%s</td>",$row["email"]);
	printf("<td>R$ %d</td>", $row["valor_hora"] );
	printf("</tr>");
 }

    
    mysqli_free_result($result);
}


mysqli_close($link);

?>
</table>
</body>
</html>

