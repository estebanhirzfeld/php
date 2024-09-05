<?php 
    $numero = $_POST["numero"] ?? 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resultados</title>
</head>
<body>
    <ul>
            <?php  for ($i=0; $i <= 10 ; $i++): ?>
        <li>
            <?php  echo "{$numero} * {$i} = ". ($numero * $i);   ?>
        </li>
            <?php endfor; ?>
    </ul>
    <form action="resultados.php" method ="post">
        <input type="text" name="numero" placeholder = "ingresar numero"> 
        
        <button type="submit"> enviar</button>
    </form>
</body>
</html>