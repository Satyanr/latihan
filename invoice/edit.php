<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
    $id = $_POST['id'];
    
    $banyaknya = $_POST['banyaknya'];
    $jenis_layanan = $_POST['jenis_layanan'];
    $satuan = $_POST['satuan'];
    $jumlah = $_POST['jumlah'];
        
    // update user data
    $result = mysqli_query($config, "UPDATE tbl_latihan_invoice SET banyaknya ='$banyaknya',jenis_layanan='$jenis_layanan',satuan='$satuan', jumlah='$jumlah' WHERE id=$id");
    
    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($config, "SELECT * FROM tbl_latihan_invoice WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
    $banyaknya = $user_data['banyaknya'];
    $jenis_layanan = $user_data['jenis_layanan'];
    $satuan = $user_data['satuan'];
    $jumlah = $user_data['jumlah'];
}
?>
<html>

<head>
    <title>Edit User Data</title>
</head>

<body>
    <a href="index.php">Home</a>
    <br /><br />

    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr>
                <td>Banyaknya</td>
                <td><input type="text" name="banyaknya" value=<?php echo $banyaknya;?>></td>
            </tr>
            <tr>
                <td>Jenis Layanan</td>
                <td><input type="text" name="jenis_layanan" value=<?php echo $jenis_layanan;?>></td>
            </tr>
            <tr>
                <td>Satuan</td>
                <td><input type="text" name="satuan" value=<?php echo $satuan;?>></td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td><input type="text" name="jumlah" value=<?php echo $jumlah;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>

</html>