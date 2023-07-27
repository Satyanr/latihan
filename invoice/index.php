<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($config, "SELECT * FROM tbl_latihan_invoice ORDER BY id DESC");
?>
 
<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>
<a href="add.php">Add New User</a><br/><br/>
<a href="invoice_pdf.php">Print</a><br/><br/>
 
    <table width='80%' border=1>
 
    <tr>
        <th>Banyaknya</th> <th>Jenis layanan</th> <th>Satuan</th> <th>Jumlah</th> <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['banyaknya']."</td>";
        echo "<td>".$user_data['jenis_layanan']."</td>";
        echo "<td>".$user_data['satuan']."</td>";    
        echo "<td>".$user_data['jumlah']."</td>";    
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>