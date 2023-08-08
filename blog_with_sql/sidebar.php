<div class="sidebar">
	<h2>Recent Articles</h2>
      <?php
$sidebar = $db->query('SELECT articleTitle, articleSlug FROM tbl_blog ORDER BY articleId DESC LIMIT 6');
while($row = $sidebar->fetch()){
    echo ' <a href="http://localhost/latihan/blog_with_sql/show.php?id='.$row['articleSlug'].'" >'.$row['articleTitle'].' </a >';
}
?>

<h2>Categories</h2>

    <?php
$stmt = $db->query('SELECT categoryName, categorySlug FROM tbl_category ORDER BY categoryId DESC');
while($row = $stmt->fetch()){
    echo '<a href="http://localhost/latihan/blog_with_sql/catlinks.php?id='.$row['categorySlug'].'">'.$row['categoryName'].'</a>';
}
?>
 
<h2>Tags </h2>
<?php
    $tagsArray = [];
    $stmt = $db->query('select distinct LOWER(articleTags) as articleTags from tbl_blog where articleTags != "" group by articleTags');
    while($row = $stmt->fetch()){
        $parts = explode(',', $row['articleTags']);
        foreach ($parts as $tag) {
            $tagsArray[] = $tag;
        }
    }

    $finalTags = array_unique($tagsArray);
    foreach ($finalTags as $tag) {
        echo "<a href='http://localhost/latihan/blog_with_sql/taglinks.php?id=".$tag."'>".ucwords($tag)."</a>";
    }
    
    ?>
 

</div>
 