<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <title>Calculadora de IMC</title>
</head>
<body>
    <form method="post" action="">
        <h2>Calculadora de IMC</h2>
        
        <div class="formulario">
            <label for="peso">Peso (kg):</label>
            <input type="number" id="peso" name="peso" placeholder="Digite seu peso" required>
            
            <label for="altura">Altura (m):</label>
            <input type="number" id="altura" name="altura" placeholder="Digite sua altura" required step="0.01">
            
            <input class="botao" type="submit" value="Calcular">
        </div>
    </form>

    <div class="Resultado">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $peso = $_POST['peso'];
            $altura = $_POST['altura'];

            if ($altura > 0) {
                $imc = $peso / ($altura * $altura);
                echo "Seu IMC é: " . number_format($imc, 2);

                // Classificação do IMC
                if ($imc < 18.5) {
                    echo " (Abaixo do peso)";
                } elseif ($imc < 25) {
                    echo " (Peso normal)";
                } elseif ($imc < 29.9) {
                    echo " (Sobrepeso)";
                } else {
                    echo " (Obesidade)";
                }
            } else {
                echo "A altura deve ser maior que zero.";
            }
        }
        ?>
    </div>
      
    <footer>
        <p>Autor: Ronaldo Charles</p>
    </footer>
</body>
</html>
