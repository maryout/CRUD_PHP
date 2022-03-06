<?php
include 'connection.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="delete from `crudop` where id=$id ";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:recuparation_des_infos.php');
    }
    else{
        die(mysqli_error($con));}
  
}
?>