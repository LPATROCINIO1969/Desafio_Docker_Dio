<!DOCTYPE HTML>
<html>
<head>
   <title>Listagem de alunos por turma</title>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

</head>
<body>
<h2>Listagem de Alunos da Turma - <?php echo $_POST["lista_turma"]; ?></h2>
<hr/>
<table border="1">
<tr>
   <td><b>Id_Aluno</b></td>
   <td><b>Nome</b></td>
   <td><b>Data da Matricula</b></td>
</tr>
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

   $query = "SELECT aluno.id AS id, aluno.nome AS nome, matriculas.data_matricula AS data_matricula FROM matriculas INNER JOIN aluno ON matriculas.alunos_id=aluno.id WHERE matriculas.turmas_id=". $_POST["lista_turma"].";";

   if ($result = mysqli_query($link, $query)) {

   while ($row = mysqli_fetch_assoc($result)) {
      printf("<tr>");
      printf("<td>%d</td>",$row["id"]);
      printf("<td>%s</td>",$row["nome"]);
      printf("<td>%s</td>",$row["data_matricula"] );
      printf("</tr>");
    }
 
  }
?>

</table>
</body>
</html>
