<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>display</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
</head>
<?php
include 'connection.php' ; 
?>
<body>
    <div class="container"><button class="btn btn-primary my-5"><a href="insersion_dans_la_base.php" class="text-light">Add user</a></button></div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">prenom</th>
      <th scope="col">email</th>
      <th scope="col">password</th>
      <th scope="col">operation</th>
    </tr>
</thead>
<?php
 $sql="SELECT * FROM `crudop`" ;
 $result=mysqli_query($con,$sql);
 if($result){
  while($row=mysqli_fetch_assoc($result)){
    $id=$row['id'];
    $name=$row['name'];
    $prenom=$row['prenom'];
    $email=$row['email'];
    $password=$row['password'];
    echo ' <tr>
    <th scope="row">'.$id.'</th>
    <td>'.$name.'</td>
    <td>'.$prenom.'</td>
    <td>'.$email.'</td>
    <td>'.$password.'</td>
    <td><button class="btn btn-primary "><a href="update.php? updateid='.$id.' " class="text-light"> Update</a></button>
    <button class="btn btn-danger "><a href="delete.php? deleteid='.$id.'" class="text-light"> Delete </a></button></td>
  </tr>' ; 
 }
 }
?>

 <!-- <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody> -->
</table>
</body>
</html>