<?php
 include 'connect.php';

 if(isset($_POST['submit'])){
$fName= $_POST['first_name'];
$lName= $_POST['last_name'];
$email= $_POST['email'];
$password= $_POST['password'];
$gender= $_POST['gender'];


$sql= "INSERT INTO `golu`(`first_name`, `last_name`, `email`, `password`, `gender`) VALUES ('$fName','$lName','$email','$password','$gender')";

$result = mysqli_query($conn,$sql);

echo "<script>window.location.href = 'http://localhost/crud_new/index.php?msg=new record created successfully';</script>";

//header("location : http://localhost/crud_new/index.php?msg=new record created successfully");

//  if($result==true){
//   // echo "Yes";
// header("location : index.php?msg=new record created successfully");
//  }
//  else{
//   echo "failed"; 
//  }-

}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>mycrud</title>
  </head>
  <body>
    <!-- As a link -->


<!-- As a heading -->
<nav class="navbar navbar-light  justify-content-center bg-primary" style="background-color: ;">
  <span class="navbar-brand mb-0 h1 text-white">PHP CRUD</span>
</nav>


<div class="container mt-5 " >

  <div class="text-center mb-4">
    
    <h3 > Add new user</h3>

    <p class="text-muted"> complete the form below to add a new user </p>
  </div>

  <div class="container d-flex justify-content-center ">


  <form action="" method="post">
    <div class="container">

   <div class="row">
       <div class="col-md-6">
          <label class=" form-label" >First name</label>
          <input type="text" class="form-control" placeholder="First name"name="first_name">

       </div>
       <div class="col-md-6">
          <label class=" form-label">Last name</label>
          <input type="text" class="form-control" placeholder="Last name" name="last_name">

       </div>

    </div>

<div class="row">
       <div class="col-md-6">
        <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
     </div>
       <div class="col-md-6">
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
          </div>
      </div>
   </div>



    <div class="form-group mb-3">
    <div class="form-check form-check-inline">
      <label for="">Gender:</label>
      &nbsp;&nbsp;
    <select name="gender" id="">
      <option value="Male">Male</option>
      <option value="Female">Female</option>
    </select>
   <!-- <label for="">Gender:</label>&nbsp;&nbsp;
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
  <label class="form-check-label" for="inlineRadio2">Male</label>&nbsp;&nbsp;
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
  <label class="form-check-label" for="inlineRadio2">Female</label> -->
</div>
</div>

      
</div>


  <div class="" style="    margin-left: 200px;";>

    <button type="submit" class="btn btn-primary justify-content-center" name="submit">Save</button>
    <a href="index.php" class=" btn btn-danger">Cancle</a>
  </div>
  </div> 
</form>
  </div>





  

</div>































    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>