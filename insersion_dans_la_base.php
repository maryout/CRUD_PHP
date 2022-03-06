<?php
  include 'connection.php';
  if(isset($_POST['submit'])){ // isset : fonction de verification 
   $name=$_POST['name'];
   $prenom=$_POST['prenom'];
   $email=$_POST['email'];
   $password=$_POST['password'];

   $sql= "insert into `crudop` (name,prenom,email,password) values('$name','$prenom','$email','$password')";
   $result=mysqli_query($con,$sql);
   if($result){
     echo 'data inserted succesfully';
   }
   else{
     die(mysqli_error($con));
   }
  }

  ?>


<html>
  <head>
    <meta charset="UTF-8" />
    <title class="container my-5">Crud operation</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
  </head>

  <body>
    <center><h1>Crud operation</h1></center>
    <div class="container my-5" style="padding: 0%; background-color: aqua;">
      <form method="post">
        <div class="mb-3">
          <label for="exampleInputname1" class="form-label" >Nom</label>
          <input type="text" class="form-control" id="exampleInputname1" placeholder="Enter votre  nom " name="name"/>
        </div>
        <div class="mb-3">
          <label for="exampleInputprename1" class="form-label">Prénom</label>
          <input type="text" class="form-control" id="exampleInputprename1" placeholder="Entrer votre nom" name="prenom"/>
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input
            type="email"
            class="form-control"
            id="exampleInputEmail1"
            placeholder="Enter votre email " 
            name="email"
          />
          <div id="emailHelp" class="form-text">
            We'll never share your email with anyone else.
          </div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input
            type="password"
            class="form-control"
            id="exampleInputPassword1"
            placeholder="password"
            name="password"
          />
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1" name="cek"/>
          <label class="form-check-label" for="exampleCheck1"
            >Check me out</label
          >
        </div>
        <div class="buttin" style="text-align: center;"><button type="submit" class="btn btn-primary" name="submit">Submit</button>
        <button type="text" class="btn btn-danger" ><a href="recuparation_des_infos.php" class="text-light">Show users</a></button>
      </form>
    </div>
  </body>
  <footer></footer>
</html>
