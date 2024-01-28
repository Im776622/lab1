<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вычисление объема треугольной пирамиды</title>
</head>
<body>

<h2>Вычисление объема треугольной пирамиды</h2>

<form method="post" action="">
    <label for="base">Длина основания:</label>
    <input type="number" name="base" required><br>

    <label for="height">Высота:</label>
    <input type="number" name="height" required><br>

    <label for="result">Результат:</label>
    <input type="text" name="result" value="<?php echo calculateVolume(); ?>" readonly><br>

    <input type="submit" value="Вычислить">
</form>

<?php
function calculateVolume() {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $base = $_POST["base"];
        $height = $_POST["height"];

        // Формула объема треугольной пирамиды: V = (1/3) * S * h
        $volume = (1/3) * $base * $height;

        return $volume;
    }
    return "";
}
?>

</body>
</html>
