<html >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK305</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="kata">
        <button type="submit" name="submit">submit</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $kata=$_POST['kata'];
        $panjang = strlen($kata);
        $input = str_split($kata);
        $hurufPertama=0;
        $arr=0;
        echo "<h2>Input:</h2>";
        echo "$kata<br>";
        echo "<h2>Output:</h2>";
        while($hurufPertama<$panjang){
            echo strtoupper($input[$arr]);
            for($i=1; $i<$panjang; $i++){
                echo strtolower($input[$arr]);
            }
            $hurufPertama++;
            $arr++;
        }
    }
    ?>
</body>
</html>