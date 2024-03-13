<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Par ou Ímpar</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Verificação de Número</h1>
        <form method="GET" action="">
            <input name="num" type="number" placeholder="Insira um número">
            <button type="submit">Verificar</button>
        </form>
        <div class="result">
            <?php
            if(isset($_GET['num'])) {
                $num = $_GET['num'];
                echo "<p>O número informado é: $num</p>";
                
                if($num % 2 == 0) {
                    echo "<p>É PAR</p>";
                } else {
                    echo "<p>É ÍMPAR</p>";
                }
                
                if($num == round($num)) {
                    echo "<p>É REDONDO</p>";
                } else {
                    echo "<p>NÃO É REDONDO</p>";
                }
                
                if($num > 0) {
                    echo "<p>É POSITIVO</p>";
                } elseif($num < 0) {
                    echo "<p>É NEGATIVO</p>";
                } else {
                    echo "<p>É NEUTRO (zero)</p>";
                }
           }
            ?>
        </div>
    </div>
</body>
</html>