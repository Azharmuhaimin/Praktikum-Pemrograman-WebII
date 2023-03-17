<html>
<head>
<!-- css untuk tabel --> 
    <style>
        table, td, th{
            border: 1px solid black;
        }
    
        .judultabel {
            font-weight: bold;
            font-size: 25px;
            background-color: red;
            height: 65px;
        }
    </style>
</head>
<body>
<!-- pembuatan associative array -->
    <?php $samsung = array('no1' => "Samsung Galaxy S22", 'no2' => "Samsung Galaxy S22+", 'no3' => "Samsung Galaxy AO3", 'no4' => "Samsung Galaxy Xcover 5"); ?>
<!-- Pembuatan tabel -->  
    <table>
        <!-- pembuatan header tabel -->
        <tr>
            <th class="judultabel"><b>Daftar Smartphone Samsung</b></th>
        </tr>
        
        <!-- pemanggilan array ke dalam tabel -->
        <tr>
            <td><?php echo $samsung['no1']?></td>
        </tr>

        <tr>
            <td><?php echo $samsung['no2']?></td>
        </tr>

        <tr>
            <td><?php echo $samsung['no3']?></td>
        </tr>

        <tr>
            <td><?php echo $samsung['no4']?></td>
        </tr>
    </table>
</body>
</html>