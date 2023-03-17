<?php
//pembuatan variabel dan pengkonversian nilai suhu
    $celcius = 37.841;
    $fahrenheit = 9/5 * $celcius + 32;
    $reamur = 4/5 * $celcius;
    $kelvin = $celcius + 273.15;

// menggunakan br untuk baris baru dan number_format untuk membuat 4 desimal dibelakang koma
    echo "<br>Fahrenheit (F) = ".number_format($fahrenheit, 4, ",");
    echo "<br>Reamur (R) = ".number_format($reamur, 4, ",");
    echo "<br>Kelvin (K) = ".number_format($kelvin, 4, ",");  
?>