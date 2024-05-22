<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade PHP</title>
</head>
<body>
    <h2>Ordem Decrescente</h2>

    <form method="get">
        <label for="n1">Insira um número</label>
        <input type="number" id="n1" name="n1" required>
        <label for="n2">Insira outro número</label>
        <input type="number" id="n2" name="n2" required>
        <label for="n3">Insira outro número</label>
        <input type="number" id="n3" name="n3" required>
        <input type="submit" name="Enviar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['n1']) && isset($_GET['n2']) && isset($_GET['n3'])){
        $n1 = (float)$_GET['n1'];
        $n2 = (float)$_GET['n2'];
        $n3 = (float)$_GET['n3'];

        if ($n1 < $n2){
            $ordem = $n1;
            $n1 = $n2;
            $n2 = $ordem;
        }

        if ($n1 < $n3){
            $ordem = $n1;
            $n1 = $n3;
            $n3 = $ordem;
        }

        if ($n2 < $n3){
            $ordem = $n2;
            $n2 = $n3;
            $n3 = $ordem;
        }

        echo "números em ordem decrescente: $n1, $n2, $n3";

    }
    ?>
</body>
</html>