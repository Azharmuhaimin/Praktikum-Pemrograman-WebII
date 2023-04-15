<?php
        $data = [
            ["no" => 1, "nama" => "Ridho", 
            "matkul" => [
                ["nama_mk" =>"Pemrograman I", "SKS" => 2], 
                ["nama_mk" => "Praktikum Pemrograman I", "SKS" => 1],
                ["nama_mk" => "Pengantar Lingkungan Lahan Basah", "SKS" => 2], 
                ["nama_mk" => "Arsitektur Komputer", "SKS" => 3]
            ]
            ],
            ["no" => 2, "nama" => "Ratna", 
            "matkul" => [
                ["nama_mk" =>"Basis Data I", "SKS" => 2], 
                ["nama_mk" => "Praktikum Basis Data I", "SKS" => 1],
                ["nama_mk" => "Kalkulus", "SKS" => 3]
            ]
            ],
            ["no" => 3, "nama" => "Tono", 
            "matkul" => [
                ["nama_mk" => "Rekayasa Perangkat Lunak", "SKS" => 3], 
                ["nama_mk" => "Analisis dan Perancangan Sistem", "SKS" => 3],
                ["nama_mk" => "Komputasi Awan", "SKS" => 3], 
                ["nama_mk" => "Kecerdasan Bisnis", "SKS" => 3]
            ]
            ]
        ];
        for ($i=0; $i < count($data); $i++){
            $totalSks = 0;
            for ($j=0; $j < count($data[$i]["matkul"]); $j++) {
                $totalSks += $data[$i]["matkul"][$j]["SKS"];
            }
            $data[$i]["totalSks"] = $totalSks;
            if ($data[$i]["totalSks"] < 7) {
                $data[$i]["keterangan"] = "Revisi KRS";
            } else {
                $data[$i]["keterangan"] = "Tidak Revisi";
            }
        }
        ?>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK403</title>
    <style>
        table, tr, td, th {
            border: solid 1px black;
            border-collapse: collapse;
            padding: 5px 18px 12px 5px;
        }

        table tr th{
            background-color: lightgray;
            text-align: left;
        }
        .tidakRevisi {background-color: green;}
        .revisi {background-color: red;}
    </style>
</head>
<body>

    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Mata Kuliah diambil</th>
            <th>SKS</th>
            <th>Total SKS</th>
            <th>Keterangan</th>
        </tr>

        <?php
        for ($i=0; $i < count($data); $i++) {
            for ($j=0; $j < count($data[$i]["matkul"]); $j++) {
                echo "<tr>";
                if ($j == 0) {
                    echo "<td>".$data[$i]["no"]."</td>";
                    echo "<td>".$data[$i]["nama"]."</td>";
                    echo "<td>".$data[$i]["matkul"][$j]["nama_mk"]."</td>";
                    echo "<td>".$data[$i]["matkul"][$j]["SKS"]."</td>";
                    echo "<td>".$data[$i]["totalSks"]."</td>";
                    if ($data[$i]["keterangan"] == "Revisi KRS"){
                        echo "<td class= revisi>".$data[$i]["keterangan"]."</td>";
                    } else {
                        echo "<td class= tidakRevisi>".$data[$i]["keterangan"]."</td>"; 
                    }
                } else {
                    echo "<td></td>";
                    echo "<td></td>";
                    echo "<td>".$data[$i]["matkul"][$j]["nama_mk"]."</td>";
                    echo "<td>".$data[$i]["matkul"][$j]["SKS"]."</td>";
                    echo "<td></td>";
                    echo "<td></td>";
                }
                echo "</tr>";
            }
        }
        ?>
        </table>
</body>
</html>