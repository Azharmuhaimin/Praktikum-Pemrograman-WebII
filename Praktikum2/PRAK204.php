<!DOCTYPE html>
<html>
<head>
    <title>PRAK204</title>
</head>
<body>
    <form action="" method="post">
        Nilai : <input type="number" name="nilai" value="<?=isset($_POST['nilai']) ? $_POST['nilai'] : ''?>" min="0" required><br>
        <button type="submit" name="konversi">Konversi</button>
    </form>
    <?php
        
        if(isset($_POST["konversi"])){
            $nilai= $_POST['nilai'];    
            if ($nilai == 0)
            {echo '<h1><b>Hasil: Nol<b></h1>';}
            else if ($nilai > 0 && $nilai < 10)
            {echo '<h1><b>Hasil: Satuan<b></h1>';}
            else if ($nilai >= 11 && $nilai < 20)
            {echo '<h1><b>Hasil: Belasan<b></h1>';}
            else if ($nilai >= 10 && $nilai < 100)
            {echo '<h1><b>Hasil: Puluhan<b></h1>';}
            else if ($nilai >= 100 && $nilai < 1000)
            {echo '<h1><b>Hasil: Ratusan<b></h1>';}
            else if ($nilai >= 1000)
            {echo '<h1><b>Hasil: Anda Menginput Melebihi Limit Bilangan<b></h1>';}
        }
    ?>
</body>
</html>