<?php
//index.php

$connect = new PDO("mysql:host=localhost;dbname=latihan_jquery_db", "root", "");

$query = "SELECT DISTINCT Country FROM tbl_customer ORDER BY Country ASC";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

?>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Ajax Live Data Search using Multi Select Dropdown in PHP</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/css/bootstrap-select.min.css" integrity="sha512-ARJR74swou2y0Q2V9k0GbzQ/5vJ2RBSoCWokg4zkfM29Fb3vZEQyv0iWBMW/yvKgyHSR/7D64pFMmU8nYmbRkg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js" integrity="sha512-yDlE7vpGDP7o2eftkCiPZ+yuUyEcaBwoJoIhdXv71KZWugFqEphIS3PU60lEkFaz8RxaVsMpSvQxMBaKVwA5xg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <div class="container">
        <br />
        <h2 align="center">Ajax Live Data Search using Multi Select Dropdown in PHP</h2><br />

        <select name="multi_search_filter" id="multi_search_filter" multiple class="form-control selectpicker">
            <?php
   foreach($result as $row)
   {
    echo '<option value="'.$row["Country"].'">'.$row["Country"].'</option>'; 
   }
   ?>
        </select>
        <input type="hidden" name="hidden_country" id="hidden_country" />
        <div style="clear:both"></div>
        <br />
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Customer Name</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>Postal Code</th>
                        <th>Country</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
        <br />
        <br />
        <br />
    </div>
</body>

</html>


<script>
$(document).ready(function() {

    load_data();

    function load_data(query = '') {
        $.ajax({
            url: "fetch.php",
            method: "POST",
            data: {
                query: query
            },
            success: function(data) {
                $('tbody').html(data);
            }
        })
    }

    $('#multi_search_filter').change(function() {
        $('#hidden_country').val($('#multi_search_filter').val());
        var query = $('#hidden_country').val();
        load_data(query);
    });

});
</script>