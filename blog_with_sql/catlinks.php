<?php require('includes/config.php'); 

$stmt = $db->prepare('SELECT categoryId,categoryName FROM tbl_category WHERE categorySlug = :categorySlug');
$stmt->execute(array(':categorySlug' => $_GET['id']));
$row = $stmt->fetch();

//if post does not exists redirect user.
if($row['categoryId'] == ''){
    header('Location: ./');
    exit;
}


?>

<?php include("head.php");  ?>

	<title><?php echo $row['categoryName'];?>-Techno Smarter</title>
	<?php include("header.php");  ?>
<div class="content">
 

<p>Article Category:- <?php echo $row['categoryName'];?></p>
        <hr>
       

        <?php    
        try {

            $stmt = $db->prepare('
                SELECT 
                    tbl_blog.articleId, tbl_blog.articleTitle, tbl_blog.articleSlug, tbl_blog.articleDescrip, tbl_blog.articleDate 
                FROM 
                tbl_blog,
                    tbl_cat_links
                WHERE
                tbl_blog.articleId =  tbl_cat_links.articleId
                     AND  tbl_cat_links.categoryId = :categoryId
                ORDER BY 
                    articleId DESC
                ');
            $stmt->execute(array(':categoryId' => $row['categoryId']));
            while($row = $stmt->fetch()){
                
                echo '<div>';
                    echo '<h1><a href="../'.$row['articleSlug'].'">'.$row['articleTitle'].'</a></h1>';
                    echo '<p>Posted on '.date('jS M Y H:i:s', strtotime($row['articleDate'])).' in ';

                        $stmt2 = $db->prepare('SELECT categoryName, categorySlug   FROM tbl_category, tbl_cat_links WHERE tbl_category.categoryId = tbl_cat_links.categoryId AND tbl_cat_links.articleId = :articleId');
                        $stmt2->execute(array(':articleId' => $row['articleId']));

                        $catRow = $stmt2->fetchAll(PDO::FETCH_ASSOC);

                        $links = array();
                        foreach ($catRow as $cat)
                        {
                            $links[] = "<a href='".$cat['categorySlug']."'>".$cat['categoryName']."</a>";
                        }
                        echo implode(", ", $links);

                    echo '</p>';
                    echo '<p>'.$row['articleDescrip'].'</p>';                
                
                     echo '<p><button class="readbtn"><a href="../blog_with_sql/show.php?id='.$row['articleSlug'].'">Read More</a></button></p>';   

                echo '</div>';

            }

        } catch(PDOException $e) {
            echo $e->getMessage();
        }

        ?>
</div>
<?php include("sidebar.php");  ?>

<?php include("footer.php");  ?> 