<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Varáveis</title>
</head>
<body>
    <?php
        // As variáveis no php são CASE SENSITIVE
        $nome = "ÂNGELO";

        $sobrenome = "FRANCISCO";

        const IDADE = 14;

        $idade = IDADE;

        echo "<script>alert('Olá, $nome $sobrenome, a sua idade é $idade.');</script>"; 
    ?>

</body>
</html>