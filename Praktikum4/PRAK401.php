<?php
    $panjang = $lebar = $nilai = "";

    if (isset($_POST['cetak'])) {
        $panjang = $_POST['panjang'];
        $lebar = $_POST['lebar'];
        $nilai = $_POST['nilai'];
    }
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK401</title>
    <style>
        table, tr, td{
            border: 1px solid;
            border-collapse: collapse;
            padding: 5px;
            text-align: center;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        Panjang : <input type="text" name="panjang" value="<?=$panjang;?>"><br>
        Lebar : <input type="text" name="lebar" value="<?=$lebar;?>"><br>
        Nilai : <input type="text" name="nilai" value="<?=$nilai;?>"><br>
        <input type="submit" name="cetak" value="Cetak">
    </form>

    <?php
        if (isset($_POST["cetak"])){
            $nilaiArray = explode(" ", $nilai);
            if ($panjang * $lebar == count($nilaiArray)){
                $index = 0;
                for ($i=0; $i < $panjang; $i++) {
                    for ($j=0; $j < $lebar; $j++) { 
                        $tampilNilai[$i][$j] = $nilaiArray[$index];
                        $index++;
                    }
                }
                echo "<table>";
                for ($i=0; $i < $panjang; $i++) { 
                    echo "<tr>";
                    for ($j=0; $j < $lebar; $j++) { 
                        echo "<td>".$tampilNilai[$i][$j]."</td>";
                    }
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "Panjang nilai tidak sesuai dengan ukuran matriks";
            }
        }
    ?>
</body>
</html>