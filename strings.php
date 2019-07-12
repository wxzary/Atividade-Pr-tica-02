<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Atividade prática 02 - Funções para strings</title>
</head>
<body>

    <?php 
        $string  = $_POST['texto'];
        $func_predefinida = $_POST['funcString'];
    ?>

    <?php 
        if ($func_predefinida=="strlen") {
            $string= "O tamanho da string é:\n ".strlen($string);
        }
        elseif ($func_predefinida=="strrev") {
            $string= "A string revertida fica:\n ".strrev($string);
        }
        elseif ($func_predefinida=="strtoupper") {
            $string= "Maiúscula:\n ".strtoupper($string);
        }
        elseif ($func_predefinida=="strtolower") {
            $string= "Minúscula:\n ".strtolower($string);
        }
        else{
            $string = "O primeiro caractere de cada palavra em maiúsculo: \n ".ucwords($string);
        }
    ?>

    <?php  echo $string?>
</body>

</html>