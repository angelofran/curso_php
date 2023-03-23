<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datas</title>
</head>
<body>
     <?php 
        /*
        d - quantos são hoje?
        D - que dia é hoje?
        M - Mês nome
        m - Mês número
        Y - ano completo
        y - ano abreviado

        Tempo
            G - horas
            i - minutos
            s - segundos
        */

        date_default_timezone_set("Africa/Luanda");
        $dia = date("d/m/y");
        $horas = date("G:i:s");
        echo "Hoje é dia " . $dia;

        print("Que horas temos? Temos $horas");
     ?>
</body>
</html>