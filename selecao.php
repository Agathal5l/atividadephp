<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade PHP</title>
</head>
<body>
    <h2>Seleção</h2>

    <form method="get">
        <label for="n">Insira seu nome</label>
        <input type="text" id="n" name="nome" required>
        <label for="s">Insira seu sexo</label>
        <input type="text" id="s" name="sexo" required>
        <label for="i">Insira sua idade</label>
        <input type="number" id="i" name="idade" required>
        <input type="submit" name="Enviar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['nome']) && isset($_GET['sexo']) && isset($_GET['idade'])){
        $n = $_GET['nome'];
        $s = $_GET['sexo'];
        $i = (float)$_GET['idade'];

        if ($s == "feminino" && $i < 25){
            echo "$n, você foi aceita!";
        } else{
            echo "$n, você não foi aceito(a)";
        }
    }
    ?>
</body>
</html>