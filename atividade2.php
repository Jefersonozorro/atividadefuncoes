<!DOCTYPE html>
<html>
<head>
    <title>Conversão de Dólar para Real</title>
</head>
<body>
    <form action="" method="post">
        <label for="dollar">Dólar:</label>
        <input type="text" id="dollar" name="dollar">
        <input type="submit" value="Converter">
    </form>

    <?php
    if (isset($_POST['dollar'])) {
        $dollar = $_POST['dollar'];
        $exchangeRate = 1.81;
        $real = round($dollar * $exchangeRate, 2);
        echo "<p>\${$dollar} é igual a R\$ {$real}</p>";
    }
    ?>
</body>
</html>
