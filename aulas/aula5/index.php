<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        /*
            \u - Para unicode
            '' - não interpeta o código
            "" - interpreta o código
        */
        $a = 1;

        echo "<p>$a</p>";
        echo '<p>$a</p>';

        // Sequências de escape
        //  \n, \u{}, \t, \\, \$
        print("<p>Oi\nOOO</p>");
    
        echo "<p>\t1</p><p>\n\t2</p>";

        echo "<p>$a \"Montiro\"</p>";

        // Utilizando heredoc

        $data = date('Y');

        echo <<< FRASE
            <p>Olá, como você está?
            Já estamos em $data</p>
        FRASE;

        // Utilizando nowdoc

        echo <<< 'FRASE'
            Olá, como você está?
            Já estamos em $data
        FRASE;
    ?>
</body>
</html>