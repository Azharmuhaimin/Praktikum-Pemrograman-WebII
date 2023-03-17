<html>
<head>
<!-- css untuk tabel --> 
    <style>
        table, td, th{
            border: 1px solid black;
        }
    </style>
</head>
<body>
<!-- pembuatan indexed array -->
    <?php $samsung = array("Samsung Galaxy S22", "Samsung Galaxy S22+", "Samsung Galaxy AO3", "Samsung Galaxy Xcover 5"); ?>
<!-- Pembuatan tabel -->  
    <table>
        <!-- pembuatan header tabel -->
        <tr>
            <th><b>Daftar Smartphone Samsung</b></th>
        </tr>
        
        <!-- pemanggilan array ke dalam tabel -->
        <tr>
            <td><?php echo $samsung[0]?></td>
        </tr>

        <tr>
            <td><?php echo $samsung[1]?></td>
        </tr>

        <tr>
            <td><?php echo $samsung[2]?></td>
        </tr>

        <tr>
            <td><?php echo $samsung[3]?></td>
        </tr>
    </table>
</body>
</html>