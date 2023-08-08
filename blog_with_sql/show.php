<?php require('includes/config.php'); 

$stmt = $db->prepare('SELECT articleId,articleDescrip,articleTags, articleSlug ,articleTitle, articleContent, articleDate FROM tbl_blog WHERE articleSlug = :articleSlug');
$stmt->execute(array(':articleSlug' => $_GET['id']));
$row = $stmt->fetch();

//if post does not exists redirect user.
if($row['articleId'] == ''){
    header('Location: ./');
    exit;
}
?>

<?php include("head.php");  ?>

<title><?php echo $row['articleTitle'];?></title>
<meta name="description" content="<?php echo $row['articleDescrip'];?>">
<meta name="keywords" content="<?php echo $row['articleTags'];?>">


<?php include("header.php");  ?>
<div class="container">
    <div class="content">


        <?php
            echo '<div>';
                echo '<h1>'.$row['articleTitle'].'</h1>';

                echo '<p>Posted on '.date('jS M Y H:i:s', strtotime($row['articleDate'])).' in ';

                $stmt2 = $db->prepare('SELECT categoryName, categorySlug   FROM tbl_category, tbl_cat_links WHERE tbl_category.categoryId = tbl_cat_links.categoryId AND tbl_cat_links.articleId = :articleId');
                $stmt2->execute(array(':articleId' => $row['articleId']));

$catRow = $stmt2->fetchAll(PDO::FETCH_ASSOC);
$links = array();
foreach ($catRow as $cat){
     $links[] = "<a href='category/".$cat['categorySlug']."'>".$cat['categoryName']."</a>";
}
echo implode(", ", $links);

echo '</p>';
echo '<p>Tagged as: ';
$links = array();
$parts = explode(',', $row['articleTags']);
foreach ($parts as $tags)
{
 $links[] = "<a href='".$tags."'>".$tags."</a>";
}
echo implode(", ", $links);
echo '</p>';
  echo '<hr>';
 

                
                echo '<p>'.$row['articleContent'].'</p>';    

            echo '</div>';
$baseUrl = "http://localhost/latihan/blog_with_sql/"; 
$slug = $row['articleSlug']; 
$articleIdc = $row['articleId']; 
        ?>
    </div>

</div>
<?php //sidebar content //added sidebar 
include("sidebar.php");  ?>
</div>

<p><strong>Share </strong></p>
              <ul style="width: 10%; height: 10%;">
                  
                <a target="_blank" href="http://www.facebook.com/sharer.php?u=<?php echo $baseUrl.$slug; ?>"> <img src="assets/images/facebook.svg" ></a>
                
                <a target="_blank" href="http://twitter.com/share?text=Visit the link &url=<?php echo $baseUrl.$slug; ?>&hashtags=blog,technosmarter,programming,tutorials,codes,examples,language,development">
 <img src="assets/images/twitter.svg" ></a>
               
                <a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo $baseUrl.$slug; ?>"> <img src="assets/images/linkedin.svg " ></a>
                
                 <a target="_blank" href="http://pinterest.com/pin/create/button/?url=<?php echo $baseUrl.$slug; ?>">
 <img style="width:100%; heigth:100%" src="assets/images/whatsapp.svg" ></a>
              </ul>

<h2> Recomended Posts: </h2>
<?php

// run query//select by current id and display the next 5 blog posts 

$recom= $db->query("SELECT * FROM tbl_blog WHERE articleId > $articleIdc ORDER BY articleId ASC LIMIT 5");

// look through query
       while($row1 = $recom->fetch()){
         echo '<h2><a href="'.$row1['articleSlug'].'">'.$row1['articleTitle'].'</a></h2>';
}
?>

<h2> Previous Posts:</h2>
<?php

// run query//select by current id and display the previous 5 posts

$previous= $db->query("SELECT * from tbl_blog where articleId<$articleIdc order by articleId DESC limit 5");

// look through query
       while($row1 = $previous->fetch()){
         echo '<h2><a href="'.$row1['articleSlug'].'">'.$row1['articleTitle'].'</a></h2>';

}


?>

<div id="disqus_thread"></div>
<script>
    /**
    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
    /*
    var disqus_config = function () {
    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    */
    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://latihan-4.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>


<?php include("footer.php");  ?>