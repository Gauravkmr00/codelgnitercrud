<?php
include 'connect.php';

if($id = isset($_GET['updateid'])){

$id=$_GET['updateid'];

$sql="SELECT * FROM `golu` WHERE id = '$id'";
$result=mysqli_query($conn , $sql);

$row=mysqli_fetch_assoc($result);

$id=$row['id'];
// $password=$row['password'];
$first_name=$row['first_name'];
$last_name=$row['last_name'];
$email=$row['email'];
$password=$row['password'];
$gender=$row['gender'];

// $id=$row['id'];
// $first_name=$row['name'];
// $last_name=$row['email'];
// $email=$row['mobile'];
// $gender=$row['password'];

}


if(isset($_POST['submit'])){

 $first_name=$_POST['first_name'];
  $last_name=$_POST['last_name'];
  $gender=$_POST['gender'];
 $email=$_POST['email'];
 $password=$_POST['password'];



 $sql = "UPDATE `golu` SET  `first_name`='$first_name', `last_name`='$last_name',  `email`='$email', `password`='$password', `gender`='$gender'  WHERE id= '$id' ";

 $result = mysqli_query($conn , $sql);
 
 if($result){
  echo "<script>window.location.href = 'http://localhost/crud_new/index.php?msg=Record updated successfully';</script>";
  //echo "Data updated successfully";
 //header ('loctaion:display.php ');
 }
 else
 {
  die(mysqli_error($conn));
 }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>crud operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container my-5">
    
    <form method="post">
  <div class="mb-3 mt-3">
    <label class="form-label">First Name</label>
    <input type="text" class="form-control"  placeholder="Enter your name" name="first_name" autocomplete="off" value="<?php echo $first_name; ?>" >
  </div>

   <div class="mb-3 mt-3">
    <label class="form-label">Last name:</label>
    <input type="text" class="form-control"  placeholder="Enter your last name" name="last_name" autocomplete="off" value="<?php echo $last_name; ?>" >
  </div>

    <div class="mb-3 mt-3">
    <label class="form-label">Email</label>
    <input type="email" class="form-control"  placeholder="Enter your email" name="email" autocomplete="off" value="<?php echo $email; ?>" >
  </div>

   <div class="mb-3 mt-3">
    <label class="form-label">Password</label>
    <input type="password" class="form-control"  placeholder="Enter your password" name="password" autocomplete="off" value="<?php echo $password; ?>" >
  </div>
    <div class="mb-3 mt-3">
    <label class="form-label">Gender</label><br/>

    <?php 
    if($gender == "Male"){
      $male = "selected";
      $female = "";
    }else{
      $male = "";
      $female = "selected";
    }
    ?>

    <select style="width: 100%; border: 1px solid lightgrey; padding: 5px 10px 5px 10px;" name="gender">
      <option value="Male" <?php echo $male; ?> >Male</option>
      <option value="Female" <?php echo $female; ?> >Female</option>
    </select>

    <!-- <input type="password" class="form-control"  placeholder="Enter your password" name="password"autocomplete="off" value="<?php echo $gender; ?>" > -->
  </div>

   <button type="submit" class="btn btn-primary" name="submit" value="submit">update</button>
  
</form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>