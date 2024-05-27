<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
            // pegando o número baseado no número digitado no formulário e atribuindo seus valores
            $number = $_GET["number"];
            $sucNumber = $number + 1;
            $antNumber = $number - 1;

            echo "<p>O número digitado foi: <strong>$number</strong></p>";
            echo "<p>O seu sucessor é: $sucNumber</p>";
            echo "<p>O seu antecessor é: $antNumber</p>";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar pra página anterior</a></p>
    </main>
</body>
</html>