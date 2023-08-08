 
<?php require('includes/config.php'); 

$stmt = $db->prepare('SELECT pageId,pageTitle,pageSlug,pageContent,pageDescrip,pageKeywords FROM tbl_pages WHERE pageSlug = :pageSlug');
$stmt->execute(array(':pageSlug' => $_GET['pageId']));
$row = $stmt->fetch();

//if post does not exists redirect user.
if($row['pageId'] == ''){
    header('Location: ./');
    exit;
}


?>

<?php include("head.php");  ?>

  <title><?php echo $row['pageTitle'];?></title>
  <meta name="description" content="<?php echo $row['pageDescrip'];?>">    
<meta name="keywords" content="<?php echo $row['pageKeywords'];?>">

  <?php include("header.php");  ?>
<div class="content">
 
<?php
echo '<h1>'.$row['pageTitle'].'</h1>';
?>
<hr> 
<?php 
echo '<p>'.$row['pageContent'].'</p>';
       
?>
</div>
<?php include("sidebar.php");  ?>

<?php include("footer.php");  ?>
 