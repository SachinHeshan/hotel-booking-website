<?php
require('../inc/db_config.php');
require('../inc/essentials.php');
adminLogin(); // make sure this function is defined to check session/login

if (isset($_POST['get_general']))
     {
    $q = "SELECT * FROM setting WHERE sr_no = ?";
    $values = [1];
    $res = select($q, $values, "i");
    $data = mysqli_fetch_assoc($res);
    $json_data = json_encode($data);
    echo $json_data;
    } 

   
?>
