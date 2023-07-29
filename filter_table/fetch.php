<?php

//fetch.php

$connect = new PDO("mysql:host=localhost;dbname=latihan_jquery_db", "root", "");

if($_POST["query"] != '')
{
 $search_array = explode(",", $_POST["query"]);
 $search_text = "'" . implode("', '", $search_array) . "'";
 $query = "
 SELECT * FROM tbl_customer 
 WHERE Country IN (".$search_text.") 
 ORDER BY CustomerID DESC
 ";
}
else
{
 $query = "SELECT * FROM tbl_customer ORDER BY CustomerID DESC";
}

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

$total_row = $statement->rowCount();

$output = '';

if($total_row > 0)
{
 foreach($result as $row)
 {
  $output .= '
  <tr>
   <td>'.$row["CustomerName"].'</td>
   <td>'.$row["Address"].'</td>
   <td>'.$row["City"].'</td>
   <td>'.$row["PostalCode"].'</td>
   <td>'.$row["Country"].'</td>
  </tr>
  ';
 }
}
else
{
 $output .= '
 <tr>
  <td colspan="5" align="center">No Data Found</td>
 </tr>
 ';
}

echo $output;


?>