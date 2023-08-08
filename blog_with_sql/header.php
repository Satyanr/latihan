 
<link href="http://localhost/latihan/blog_with_sql/assets/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<ul class="ulclass">
<li><a href="http://localhost/latihan/blog_with_sql/">Home</a></li>

<?php
$baseUrl="http://localhost/latihan/blog_with_sql/"; 
        try {

            $stmt = $db->query('SELECT pageTitle,pageSlug FROM tbl_pages ORDER BY pageId ASC');
            while($rowlink = $stmt->fetch()){
                
                echo '<li><a href="'.$baseUrl.'page.php?id='.$rowlink['pageSlug'].'">'.$rowlink['pageTitle'].'</a></li>';
            }

        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    ?>
 


</ul>
