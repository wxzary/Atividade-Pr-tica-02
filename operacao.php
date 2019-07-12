<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Atividade prática 02 - Operações básicas</title>
</head>
<body>
    <?php
    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];
    $calculo = $_POST['operacao'];
    if ($calculo == "adicionar") {
        $resultado = $valor1 + $valor2;
    } 
    
    elseif ($calculo == "subtrair") {
        $resultado = $valor1 - $valor2;
    } 
    
    elseif ($calculo == "multiplicar") {
        $resultado = $valor1 * $valor2;
    } 
    
    else {
        $resultado = $valor1 / $valor2;
    }
    ?>

    <p>Resultado do Cálculo: <?php echo $resultado ?></p>


</body>

</html>