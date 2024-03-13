<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Número</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f3f3;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 500px;
            margin: 50px auto;
            background-color: #fce7e7;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h1 {
            margin-bottom: 20px;
            color: #ff6b6b;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        input[type="number"] {
            padding: 10px;
            margin-right: 10px;
            border: 2px solid #ff6b6b;
            border-radius: 8px;
            font-size: 16px;
            width: 200px;
            outline: none;
        }
        button {
            padding: 10px 20px;
            background-color: #ff6b6b;
            color: #fff;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease-in-out;
        }
        button:hover {
            background-color: #ff8c8c;
        }
        .result p {
            margin: 10px 0;
            font-size: 18px;
            color: #ff6b6b;
            font-weight: bold;
        }
    </style>
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
                
                $lastDigit = substr($num, -1);
                if($lastDigit == 0) {
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
