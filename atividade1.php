<!DOCTYPE html>
<html>
<head>
    <title>Conversão de Fahrenheit para Celsius</title>
</head>
<body>
    <form action="" method="post">
        <label for="fahrenheit">Fahrenheit:</label>
        <input type="text" id="fahrenheit" name="fahrenheit">
        <input type="submit" value="Converter">
    </form>

    <?php
    if (isset($_POST['fahrenheit'])) {
        $fahrenheit = $_POST['fahrenheit'];
        $celsius = ($fahrenheit - 32) * 5 / 9;
        echo "<p>{$fahrenheit}°F é igual a {$celsius}°C</p>";
    }
    ?>
</body>
</html>
