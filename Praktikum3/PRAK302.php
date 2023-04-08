<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK302</title>
    <style>
        .view {width: 25px;}
        .blank {width: 25px; opacity: 0;}
    </style>
</head>
<body>
<form action="" method="post">
        Tinggi : <input type="number" name="tinggi" value="<?=isset($_POST['tinggi']) ? $_POST['tinggi'] : ''?>">
        <br>
        Alamat Gambar : <input type="text" name="alamat" value="<?=isset($_POST['alamat']) ? $_POST['alamat'] : ''?>">
        <br>
        <input type="submit" value="Cetak" name="cetak">
    </form>
    <?php
        if(isset($_POST["cetak"])){
            $tinggi = $_POST['tinggi'];
            $alamat = $_POST['alamat'];
            $i = 0;
            
            while($i < $tinggi){
                $j = 0;
    
                while($j < $i){
                    echo "<img class=blank src='$alamat'>";
                    $j++;
                }
                $k = $tinggi;
    
                while ($k >= $i+1) {
                    echo "<img class=view src='$alamat'>";
                    $k--;
                }
                echo "<br>";
                $i++;
            }
        }
    ?>
</body>
</html>