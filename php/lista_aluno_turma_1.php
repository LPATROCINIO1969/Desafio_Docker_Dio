<!DOCTYPE HTML>
<html>
<head>
   <title>Listagem de alunos por turma</title>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

</head>
<body>
<h2>Listagem de Alunos por Turma</h2>
<hr/>
<form action="lista_aluno_turma_2.php" method="post">

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

   $query = "SELECT id FROM turmas order by id;";

   if ($result = mysqli_query($link, $query)) {

   
    printf("<label>Entre com o numero da turma:</label> ");
    printf("<select id=\"turma\" name=\"lista_turma\" >");
    while ($row = mysqli_fetch_assoc($result)) {
	$texto = "Turma - " . $row["id"]; 
   	printf("<option value=\"%d\">%s</option>",$row["id"],$texto);
    }
   printf("</select>"); 


  }
?>
<br>
<hr>

<input type="submit" value="Confirmar">
</form>
</body>
</html>
