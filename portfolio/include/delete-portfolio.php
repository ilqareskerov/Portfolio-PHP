<?php
require('C:\xampp\htdocs\portfolio\include\db.php');
if(!isset($_GET["id"])=="" && isset($_GET["id"])){
$id=$_GET["id"];
$q="Delete from portfolio where id='$id'";
$r=mysqli_query($db,$q);
if($r){
    header("Location: ../admin/index.php?portfoliosetting=true#portfolio_table");

}
}

?>