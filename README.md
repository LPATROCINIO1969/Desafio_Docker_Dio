# Desafio_Docker_Dio
Repositório contendo o desafio de projeto utilizando o Docker, referente ao "Bootcamp TQI Kotlin - Backend Developer".

##Descrição
Para esse desafio, desenvolvi um banco de dados de cursos de treinamento(Dio_Mysql) em MYSQL, contendo as seguintes tabelas:
* Cursos
* Aluno
* Instrutores
* Turmas
* Matriculas
As tabelas Turmas e Matriculas estão relacionadas por chaves estrangeiras às tabelas cursos, aluno e Instrutores.
Uma pequena aplicação em PHP, resgata os dados das tabelas do banco de dados e apresenta as listagens de: cursos, alunos, instrutores, turmas e alunos por turma.
O pacote foi composto, usando Docker Compose, pelas imagens do APACHE, MYSQL, PHP e PHPADMIN.
Manteve-se uma cópia do material (páginas php e banco de dados mysql) nas pastas /data/projeto/php e /data/projeto/mysql. A configuração do arquivo docker-composer foi mantida na pasta /compose/projeto.


