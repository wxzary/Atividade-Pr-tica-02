<!DOCTYPE html>
<html>
<head>
	<title>Atividade Prática 02 - Seletor de Carros</title>
	<meta charset="utf-8">
</head>
<body>
    <h2>Sucesso!</h2>
    <?php
    $R = $_POST['R'];
    $G = $_POST['G'];
    $B = $_POST['B'];

    $RGB = $R . ',' . $G . ',' . $B;

    ?>

    R: <?php echo $R; ?>
    G: <?php echo $G; ?>
    B: <?php echo $B; ?>
    <br/>
    <br/>
    <div style="width:150px; height:150px; background-color: rgb(<?php echo $RGB; ?>)"/><div>
</body>
</html>