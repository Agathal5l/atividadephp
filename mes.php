<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade PHP</title>
</head>
<body>
    <h2>Meses do Ano</h2>

    <form method="get">
        <label for="n1">Insira um número</label>
        <input type="number" id="n1" name="n1" required>
        <input type="submit" name="Enviar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['n1'])){
        $n1 = (float)$_GET['n1'];

        if ($n1 == 1){
            echo "Janeiro";
        } elseif ($n1 == 2){
            echo "Fevereiro";
        } elseif ($n1 == 3){
            echo "Março";
        } elseif ($n1 == 4){
            echo "Abril";
        } elseif ($n1 == 5){
            echo "Maio";
        } elseif ($n1 == 6){
            echo "Junho";
        } elseif ($n1 == 7){
            echo "Julho";
        } elseif ($n1 == 8){
            echo "Agosto";
        } elseif ($n1 == 9){
            echo "Setembro";
        } elseif ($n1 == 10){
            echo "Outubro";
        } elseif ($n1 == 11){
            echo "Novembro";
        } elseif ($n1 == 12){
            echo "Dezembro";
        } else{
            echo "não existe mês com esse número";
        }
    }
    ?>
</body>
</html>