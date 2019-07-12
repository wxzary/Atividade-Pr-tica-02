<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Atividade Prática 02 - Formulário</title>
</head>
<body>

    <?php
        $nome = $_POST['nome'];
        $vinho = $_POST['vinho'];
        $comida = $_POST['comida'];
    ?>

    Obrigado pela sua seleção, <?php print $nome ?>
    <br>
    Você realmente aprecia <?php print $comida ?>,
    <br>
    especialmente com um bom vinho <?php print $vinho ?>


</body>
</html>