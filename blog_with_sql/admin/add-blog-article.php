<?php require_once('../includes/config.php'); 

if(!$user->is_logged_in()){ header('Location: login.php'); }
?>

<?php include("head.php");  ?>
<!-- On page head area--> 
  <title>Add New Article - Techno Smarter Blog</title>
    <script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>
    <script>
          tinymce.init({
             mode : "specific_textareas",
    editor_selector : "mceEditor",
              plugins: [
                  "advlist autolink lists link image charmap print preview anchor",
                  "searchreplace visualblocks code fullscreen",
                  "insertdatetime media table contextmenu paste"
              ],
              toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
          });
  </script>

  <?php include("header.php"); 

   ?>

<div class="content">
 
    <h1>Add New Article</h1>

    <?php

    //if form has been submitted process it
    if(isset($_POST['submit'])){

 

        //collect form data
        extract($_POST);

        //very basic validations
        if($articleTitle ==''){
            $error[] = 'Please enter the title.';
        }

        if($articleDescrip ==''){
            $error[] = 'Please enter the description.';
        }

        if($articleContent ==''){
            $error[] = 'Please enter the content.';
        }

        if(!isset($error)){

          try {



            $articleSlug = slug($articleTitle);

            //insert into database
            $stmt = $db->prepare('INSERT INTO tbl_blog (articleTitle,articleSlug,articleDescrip,articleContent,articleDate,articleTags) VALUES (:articleTitle, :articleSlug, :articleDescrip, :articleContent, :articleDate, :articleTags)') ;
  



$stmt->execute(array(
    ':articleTitle' => $articleTitle,
    ':articleSlug' => $articleSlug,
    ':articleDescrip' => $articleDescrip,
    ':articleContent' => $articleContent,
    ':articleDate' => date('Y-m-d H:i:s'),
    ':articleTags' => $articleTags
));

//add categories
$articleId = $db->lastInsertId();
if(is_array($categoryId)){
    foreach($_POST['categoryId'] as $categoryId){
        $stmt = $db->prepare('INSERT INTO tbl_cat_links (articleId,categoryId)VALUES(:articleId,:categoryId)');
        $stmt->execute(array(
            ':articleId' => $articleId,
            ':categoryId' => $categoryId
        ));
    }
}
 



    //redirect to index page
    header('Location: index.php?action=added');
    exit;

}catch(PDOException $e) {
                echo $e->getMessage();
            }

        }

    }

    //check for any errors
    if(isset($error)){
        foreach($error as $error){
            echo '<p class="message">'.$error.'</p>';
        }
    }
    ?>
 <form action="" method="post">

        <h2><label>Article Title</label><br>
        <input type="text" name="articleTitle" style="width:100%;height:40px" value="<?php if(isset($error)){ echo $_POST['articleTitle'];}?>"></h2>

        <h2><label>Short Description(Meta Description) </label><br>
        <textarea name="articleDescrip" cols="120" rows="6"><?php if(isset($error)){ echo $_POST['articleDescrip'];}?></textarea></h2>

        <h2><label>Long Description(Body Content)</label><br>
        <textarea name="articleContent" id="textarea1" class="mceEditor" cols="120" rows='20'><?php if(isset($error)){ echo $_POST['articleContent'];}?></textarea></h2>
        
        <fieldset>
    <h2><legend>Categories</legend>

    <?php    
$checked = null;
    $stmt2 = $db->query('SELECT categoryId, categoryName FROM tbl_category ORDER BY categoryName');

    while($row2 = $stmt2->fetch()){

        if(isset($_POST['categoryId'])){

            if(in_array($row2['categoryId'], $_POST['categoryId'])){
               $checked="checked='checked'";
            }else{
               

            }
        }

 echo "<input type='checkbox' name='categoryId[]' value='".$row2['categoryId']."' $checked> ".$row2['categoryName']."<br />";
    }

    ?>
</h2>

<h2><label>Articles Tags (Separated by comma without space)</label><br>
<input type='text' name='articleTags' value='<?php if(isset($error)){ echo $_POST['articleTags'];}?>' style="width:100%;height:40px"></h2>
 
</fieldset>

 

       
        <button name="submit" class="subbtn">Submit</button>


    </form>



</div>
<?php //add above the footer
include("sidebar.php");  ?>
<?php include("footer.php");  ?>

 
