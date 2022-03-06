<?php
 $con= new mysqli('localhost','root','','crud');

 if($con){
     echo("connection succesfull");
 }
 else{
     die(mysqli_error($con));
 }