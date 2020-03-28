<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<?php
  $conn=mysqli_connect("localhost","root","","user");
      if(isset($_REQUEST['submit']))
      {
          $name=$_REQUEST['name'];
          $email=$_REQUEST['email'];
          $password=$_REQUEST['password'];
          $mobile=$_REQUEST['mobile'];
          $comment=$_REQUEST['comment'];
          $hash_pass=password_hash($password,PASSWORD_BCRYPT);
          $email_check="SELECT * FROM contact WHERE email='$email'";
          $email_query=mysqli_query($conn,$email_check);
          $email_row=mysqli_num_rows($email_query);
          if($email_row == 1)
          {
              echo "<span class='alert alert-danger'> Email Already exits </span>";
          }
          else{
              $insert="INSERT INTO contact(name,email,password,mobile,comment)
              values('$name','$email','$hash_pass','$mobile','$comment')";
              mysqli_query($conn,$insert);
               echo "<script> location.replace('webpage.php')  </script>";
          }
      }
?>
</body>
</html>