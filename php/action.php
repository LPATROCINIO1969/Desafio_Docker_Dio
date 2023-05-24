Olá, <?php echo htmlspecialchars($_POST['name']); ?>.
Você tem <?php echo (int)$_POST['age']; ?> anos de idade,
altura igual a  <?php echo  $_POST['height']; ?> m e peso igual a <?php echo $_POST['weight']; ?> kg.<br>
Seu IMC é igual a <?php echo  number_format($_POST['weight']/pow($_POST['height'],2),1) ?> .

