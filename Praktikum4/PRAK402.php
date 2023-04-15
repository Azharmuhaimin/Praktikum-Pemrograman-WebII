<?php
    $data = [
        ["nama" => "Andi", "NIM" => "2101001", "UTS" => 87, "UAS" => 65],
        ["nama" => "Budi", "NIM" => "2101002", "UTS" => 76, "UAS" => 79],
        ["nama" => "Tono", "NIM" => "2101003", "UTS" => 50, "UAS" => 41],
        ["nama" => "Jessica", "NIM" => "2101004", "UTS" => 60, "UAS" => 75],
    ];

    for ($i=0; $i < count($data); $i++) { 
        $data[$i]["nilaiAkhir"] = $data[$i]["UTS"] * 0.4 + $data[$i]["UAS"] * 0.6;
        if($data[$i]["nilaiAkhir"] >= 80){
            $data[$i]["huruf"] = "A";
        } elseif($data[$i]["nilaiAkhir"] > 70){
            $data[$i]["huruf"] = "B";
        } elseif($data[$i]["nilaiAkhir"] > 60){
            $data[$i]["huruf"] = "C";
        } elseif($data[$i]["nilaiAkhir"] > 50){
            $data[$i]["huruf"] = "D";
        } else{
            $data[$i]["huruf"] = "E";
        }
    }
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK402</title>
    <style>
        table, tr, td, th {
            border:  1px solid ;
            border-collapse: collapse;
            padding: 5px 25px 5px 5px;
        }
        th{
            text-align: left;
            background-color: lightgray;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Nilai UTS</th>
            <th>Nilai UAS</th>
            <th>Nilai Akhir</th>
            <th>Huruf</th>
        </tr>
        <?php
        for ($i=0; $i < count($data); $i++) { 
            echo "<tr>";
            echo "<td>".$data[$i]["nama"]."</td>";
            echo "<td>".$data[$i]["NIM"]."</td>";
            echo "<td>".$data[$i]["UTS"]."</td>";
            echo "<td>".$data[$i]["UAS"]."</td>";
            echo "<td>".$data[$i]["nilaiAkhir"]."</td>";
            echo "<td>".$data[$i]["huruf"]."</td>";
            echo "</tr>";
        }       
        ?>
    </table>
</body>
</html>