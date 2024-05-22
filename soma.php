<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade PHP</title>
</head>
<body>
    <h2>Soma e Subtração</h2>

    <form method="get">
        <label for="n1">Insira um número</label>
        <input type="number" id="n1" name="n1" required>
        <label for="n2">Insira outro número</label>
        <input type="number" id="n2" name="n2" required>
        <input type="submit" name="Enviar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['n1']) && isset($_GET['n2'])){
        $n1 = (float)$_GET['n1'];
        $n2 = (float)$_GET['n2'];

        $soma = $n1 + $n2;

        if ($soma > 20){
            $resultado = $soma + 8;
        } else{
            $resultado = $soma - 5;
        }

        echo "A soma dos número é: $soma<br>";
        echo "A soma dos números ajustados é: $resultado";
    }
    ?>
</body>
</html>