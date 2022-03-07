<?php

use LDAP\Result;

include 'connect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql = "delete from `crudtable` where id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){echo 'deleted';}else{die(mysqli_error($co));}
}
?>