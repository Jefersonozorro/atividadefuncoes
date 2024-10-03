<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Peso Ideal</title>
</head>
<body>
    <form action="" method="post">
        <label for="sexo">Sexo:</label>
        <select id="sexo" name="sexo">
            <option value="M">Masculino</option>
            <option value="F">Feminino</option>
        </select>
        <br>
        <label for="altura">Altura (em metros):</label>
        <input type="text" id="altura" name="altura">
        <br>
        <input type="submit" value="Calcular Peso Ideal">
    </form>

    <?php
    function calcularPesoIdeal($sexo, $altura) {
        if ($sexo == 'M') {
            return (72.2 * $altura) - 58;
        } else if ($sexo == 'F') {
            return (62.1 * $altura) - 44.7;
        } else {
            return "Sexo inválido.";
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $sexo = $_POST['sexo'];
        $altura = $_POST['altura'];
        $pesoIdeal = calcularPesoIdeal($sexo, $altura);
        echo "<p>O peso ideal para uma pessoa de sexo {$sexo} e altura {$altura}m é: {$pesoIdeal} kg</p>";
    }
    ?>
</body>
</html>
