<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK303</title>
    <style>
        .ukuran {width: 20px; height: 20px;}
    </style>
</head>
<body>
<form action="" method="post">
        Batas Bawah : <input type="number" name="bawah" min="1" value="<?=isset($_POST['bawah']) ? $_POST['bawah'] : ''?>">
        <br>
        Batas Atas : <input type="number" name="atas" min="1" value="<?=isset($_POST['atas']) ? $_POST['atas'] : ''?>">
        <br>
        <input type="submit" value="Cetak" name="cetak">
    </form>
    <?php
        if(isset($_POST["cetak"])){
            $bawah = $_POST['bawah'];
            $atas = $_POST['atas'];
            do {
                if (($bawah + 7) % 5 == 0) {
                    echo "<img class=ukuran src='Stars.png'>"; 
                } else {
                    echo "$bawah ";
                }
                echo " ";
                $bawah++;
            } while ($bawah <= $atas);
        }
    ?>
</body>
</html>