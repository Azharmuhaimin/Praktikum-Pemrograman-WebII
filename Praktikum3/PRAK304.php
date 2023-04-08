<html>
<head>
    <title>PRAK304</title>
</head>

<body>
    <?php
    $jumlah = 0;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $jumlah = $_POST["jumlah"];
    }

    if (isset($_POST['tambah'])) {
        $jumlah += 1;
    }

    if (isset($_POST['kurang'])) {
        $jumlah -= 1;
    }

    if(empty($jumlah)){ ?>
        <form action="" method="post">
            Jumlah bintang <input type="number" name="jumlah" min="1">
            <br>
            <button type="submit" name="submit">Submit</button>
        </form>
    <?php } ?>
    <?php if(!empty($jumlah)) {
        echo "Jumlah bintang $jumlah<br><br><br>"; ?>
        <?php for ($i=0; $i < $jumlah; $i++) {
            echo '<img src="Stars.png" width="65px" height = "65px">';
        }
        ?>
        <form action="" method="post">
            <input type="number" name="jumlah" value="<?= $jumlah ?>" hidden>
            <button type="submit" name="tambah">Tambah</button>
            <button type="submit" name="kurang">Kurang</button>
        </form>
    <?php } ?>
</body>
</html>