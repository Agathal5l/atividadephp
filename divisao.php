<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade PHP</title>
</head>
<body>
    <h2>Divisão</h2>

    <form method="get">
        <label for="n1">Insira um número</label>
        <input type="number" id="n1" name="n1" required>
        <input type="submit" name="Enviar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['n1'])){
        $n1 = (float)$_GET['n1'];

        if ($n1 % 10 == 0){
            echo "$n1 é divisível por 10";
        } elseif($n1 % 5 == 0){
            echo "$n1 é divisível por 5";
        } elseif($n1 % 2 == 0){
            echo "$n1 é divisível por 2";
        } else{
            echo "$n1 não é divisível por nenhum número";
        }
    }
    ?>
</body>
</html>