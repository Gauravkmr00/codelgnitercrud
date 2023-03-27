<?php


include 'connect.php';



if(isset($_GET['msg'])){
$msg = $_GET['msg'];
echo "<script>alert('".$msg."')</script>";
echo "<script>window.location.href = 'http://localhost/crud_new/index.php';</script>";
}




/* if(isset($_POST['submit'])){
$fName= $_POST['first_name'];
$lName= $_POST['last_name'];
$email= $_POST['email'];
$gender= $_POST['gender'];


$sql = " INSERT INTO `golu`( `first name`, `last name`, `email`, `password`, `gender`) VALUES ('$fName','$lName','$email','$password', '$gender')";


 $result= mysqli_query($conn, $sql);

 if($result==true){
  header("location : index.php?msg=new record created successfully");
 }
 else{
  echo "failed:";
 }
}*/





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
  <span class="navbar-brand mb-0 h1">PHP crud</span>
</nav>


<!-- 
<div class="container mt-5">
    <a href="add.php" class="btn btn-dark">Add new</a>
</div>
<div class="container mt-5">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
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
  </tbody>
</table> -->
  



    
  <div class="container">
     <button class="btn btn-primary my-5"><a href="add.php" class="text-light">Add user</a></button>
     <table class="table">
  <thead>
    <tr>
      <th scope="col">Sl no</th>
      <th scope="col">first name</th>
      <th scope="col">last name</th>
      <th scope="col">email</th>
      <th scope="col">Password</th>
      <th scope="col">gender</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>

  <?php


  $sql= "SELECT * FROM `golu`";
  $result= mysqli_query($conn, $sql);
  
  if($result){
    $i=1;
    while($row=mysqli_fetch_assoc($result)){
     $id=$row['id'];
     // $password=$row['password'];
     $first_name=$row['first_name'];
     $last_name=$row['last_name'];
     $email=$row['email'];
      $password=$row['password'];
     $gender=$row['gender'];

     echo '<tr>
     <th scope="row">'.$i.'</th>
     <td>'.$first_name.'</td>
     <td>'.$last_name.'</td>
     <td>'.$email.'</td>
      <td>'.$password.'</td>
     <td>'.$gender.'</td>
     <td>
        <button  class="btn btn-primary" ><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
        <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
      </td>
   </tr>';

    $i++; }
   }
?> 
     
  </tbody>
</table>

  </div>  





</div>















    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>