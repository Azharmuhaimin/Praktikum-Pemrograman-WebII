<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK301</title>
</head>
<body>
    <form action="" method="post">
        Jumlah Peserta : <input type="number" name="peserta" min="1" value="<?=isset($_POST['peserta']) ? $_POST['peserta'] : ''?>">
        <br>
        <input type="submit" value="Cetak" name="cetak">
    </form>
    <?php
        if(isset($_POST["cetak"])){
            $i = 1;
            $peserta = $_POST['peserta'];
                while($i <= $peserta){
                    if($i % 2 != 0){
                        echo "<h2><font color='red'>Peserta ke-$i</font></h2>";
                    }
                    else{
                        echo "<h2><font color='green'>Peserta ke-$i</font></h2>";
                    }
                    $i++;
                }
        }
    ?>
</body>
</html>