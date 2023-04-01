<!DOCTYPE html>
<html>
<head>
    <title>PRAK203</title>
</head>
<body>
    <form action="" method="post">
        Nilai : <input type="number" name="nilai" value="<?=isset($_POST['nilai']) ? $_POST['nilai'] : ''?>"><br>
        Dari : <br>
        <input type="radio" name="dari" value="celcius" required <?php if (isset($_POST["dari"]) and $_POST["dari"] == "celcius") echo "checked";?>> Celcius<br>
        <input type="radio" name="dari" value="fahrenheit" required <?php if (isset($_POST["dari"]) and $_POST["dari"] == "fahrenheit") echo "checked";?>> Fahrenheit<br>
        <input type="radio" name="dari" value="reamur" required <?php if (isset($_POST["dari"]) and $_POST["dari"] == "reamur") echo "checked";?>> Rheamur<br>
        <input type="radio" name="dari" value="kelvin" required <?php if (isset($_POST["dari"]) and $_POST["dari"] == "kelvin") echo "checked";?>> Kelvin<br>
        Ke : <br>
        <input type="radio" name="ke" value="celcius" required <?php if (isset($_POST["ke"]) and $_POST["ke"] == "celcius") echo "checked";?>> Celcius<br>
        <input type="radio" name="ke" value="fahrenheit" required <?php if (isset($_POST["ke"]) and $_POST["ke"] == "fahrenheit") echo "checked";?>> Fahrenheit<br>
        <input type="radio" name="ke" value="reamur" required <?php if (isset($_POST["ke"]) and $_POST["ke"] == "reamur") echo "checked";?>> Rheamur<br>
        <input type="radio" name="ke" value="kelvin" required<?php if (isset($_POST["ke"]) and $_POST["ke"] == "kelvin") echo "checked";?>> Kelvin<br>
        <button type="submit" name="konversi">Konversi</button>
    </form>

    <?php
        if (isset($_POST["konversi"])) {
            $nilai = $_POST["nilai"];
                echo "<h1>Hasil Konversi: ";
                if ($_POST["dari"] == "celcius" and $_POST["ke"] == "celcius") {
                    echo $nilai," &deg;C";
                } else if ($_POST["dari"] == "celcius" and $_POST["ke"] == "fahrenheit") {
                    echo (9/5 * $nilai) + 32," &deg;F";
                } else if ($_POST["dari"] == "celcius" and $_POST["ke"] == "reamur") {
                    echo 4/5 * $nilai," &deg;R";
                } else if ($_POST["dari"] == "celcius" and $_POST["ke"] == "kelvin") {
                    echo  $nilai + 273.15," &deg;K";

                } else if ($_POST["dari"] == "fahrenheit" and $_POST["ke"] == "fahrenheit") {
                    echo $nilai," &deg;F";
                } else if ($_POST["dari"] == "fahrenheit" and $_POST["ke"] == "celcius") {
                    echo 5/9 * ($nilai - 32)," &deg;C";
                } else if ($_POST["dari"] == "fahrenheit" and $_POST["ke"] == "reamur") {
                    echo 4/9 * ($nilai - 32)," &deg;R";
                } else if ($_POST["dari"] == "fahrenheit" and $_POST["ke"] == "kelvin") {
                    echo 5/9 * ($nilai - 32) + 273.15," &deg;K";

                } else if ($_POST["dari"] == "reamur" and $_POST["ke"] == "reamur") {
                    echo $nilai," &deg;R";
                } else if ($_POST["dari"] == "reamur" and $_POST["ke"] == "celcius") {
                    echo 5/4 * $nilai," &deg;C";
                } else if ($_POST["dari"] == "reamur" and $_POST["ke"] == "fahrenheit") {
                    echo (9/4 * $nilai) + 32," &deg;F";
                } else if ($_POST["dari"] == "reamur" and $_POST["ke"] == "kelvin") {
                    echo 5/4 * $nilai + 273.15," &deg;K";

                } else if ($_POST["dari"] == "kelvin" and $_POST["ke"] == "kelvin") {
                    echo $nilai," &deg;K";
                } else if ($_POST["dari"] == "kelvin" and $_POST["ke"] == "celcius") {
                    echo $nilai - 273.15," &deg;C";
                } else if ($_POST["dari"] == "kelvin" and $_POST["ke"] == "fahrenheit") {
                    echo 9/5 * ($nilai - 273.15) + 32," &deg;F";
                } else if ($_POST["dari"] == "kelvin" and $_POST["ke"] == "reamur") {
                    echo 4/5 * ($nilai - 273.15)," &deg;R";
                }
                echo "</h1>";
            }
    ?>
</body>
</html>