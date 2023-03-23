<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos</title>
</head>
<body>
    <?php
    /*  0x - Hexadecimal
        3e2 - float
        3 - int
        3.4 - float

        Tipos compostos:
            array
            object
        
        Tipos especiais:
            null
            resource
            callabe
            mixed
    */
        $a = (string) "GELO";
        $b = (int) 1;
        $c = (float) 3e2;
        $e = (float) 3.4; 
        $d = (bool) true;
        $f = [1, "GELO", 1.0, 3e3];
        class g {
            private string $pessoa;
        }

        $h = new g;
        
        var_dump($a, "<p></p>", $b, "<p></p>",$c, "<p></p>", $e, "<p></p>", $d, "<p></p>", $f, "<p></p>",$h); // Mostra o tipo de uma variável 
    ?>
</body>
</html>