<?php
require_once("../model/entity/Post.php");
    $matt=$_REQUEST['matt'];
    
    Post::delete_bv($matt);
    
header("location:danhsachbaiviet.php");
    
       
?>