<html>
<head>
    <title>Add Users</title>
</head>
 
<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>
 
    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Banyaknya</td>
                <td><input type="text" name="banyaknya"></td>
            </tr>
            <tr> 
                <td>Jenis Layanan</td>
                <td><input type="text" name="jenis_layanan"></td>
            </tr>
            <tr> 
                <td>Satuan</td>
                <td><input type="text" name="satuan"></td>
            </tr>
            <tr> 
                <td>Jumlah</td>
                <td><input type="text" name="jumlah"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
    
    <?php
 
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $banyaknya = $_POST['banyaknya'];
        $jenis_layanan = $_POST['jenis_layanan'];
        $satuan = $_POST['satuan'];
        $jumlah = $_POST['jumlah'];
        
        // include database connection file
        include_once("config.php");
                
        // Insert user data into table
        $result = mysqli_query($config, "INSERT INTO tbl_latihan_invoice(banyaknya,jenis_layanan,satuan,jumlah) VALUES('$banyaknya','$jenis_layanan','$satuan','$jumlah')");
        
        // Show message when user added
        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>
</body>
</html>