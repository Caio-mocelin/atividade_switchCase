<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dia da Semana</title>
    <style>
        * {
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
        }
        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(to right, #667eea, #764ba2);
            color: #fff;
        }
        form {
            background-color: rgba(255, 255, 255, 0.1);
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(8px);
            text-align: center;
        }
        label {
            font-size: 1.2em;
            display: block;
            margin-bottom: 15px;
        }
        input[type="number"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            margin-bottom: 20px;
            font-size: 1em;
        }
        input[type="submit"] {
            background-color: #ffffff;
            color: #764ba2;
            padding: 10px 20px;
            font-size: 1em;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #e0e0e0;
        }
    </style>
</head>
<body>
    <form method="POST" action="">
        <label for="dia">Digite um número de 1 a 7:</label>
        <input type="number" id="dia" name="dia" min="1" max="7" required>
        <input type="submit" value="Enviar">
        <div style="margin-top: 20px;">
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $dia = $_POST['dia'];
                switch ($dia) {
                    case 1: echo "domingo."; break;
                    case 2: echo "segunda-feira."; break;
                    case 3: echo "terça-feira."; break;
                    case 4: echo "quarta-feira."; break;
                    case 5: echo "quinta-feira."; break;
                    case 6: echo "sexta-feira."; break;
                    case 7: echo "sábado."; break;
                    default: echo "Hoje não é um dia da semana.";
                }
            }
            ?>
        </div>
    </form>
</body>
</html>
