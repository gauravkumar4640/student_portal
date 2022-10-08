


  <?php 

include('config/constant.php ');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN UP</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
   body{
        background-image: url("https://wallpaperaccess.com/full/6383572.jpg");
        background-repeat: no-repeat;
        background-size: 1500px 835px;
        color:white;
        background-color: black;
        font-family: 'Lato', sans-serif;
        border-radius:4px;
     }
     div{
        float: center;
        width: 25em;
        align-items: center;
        background: black;
        padding: 10px 15px;
        color: #fff;
        border-radius: 5px;
        margin-left: 35%;
        height: 60em;
        border: none;
        text-decoration: none;
     }
     .btn-signup{
    background-color: whitesmoke;
    margin-left: 30%;
    padding: 3% 7%;
    color: black;
    text-decoration: none;
    font-weight: bold;
    border-radius: 4px;
    

    }
    .btn-signup:hover{
        
        background-color: black;
        color:whitesmoke;

        
    }
    .login{
        width:400px;
    }
    input[type="text"] {
        width: 340px;
    }
    input[type="number"] {
        width: 340px;
    }
    input[type="password"] {
        width: 340px;
    }
        
</style>
<body>
    <div class="login">
        <h1 class="text-center">Sign Up</h1>
       
        <br>


<?php 

if(isset($_SESSION['login']))
{
        echo $_SESSION['login'];
unset($_SESSION['login']);
}
if(isset($_SESSION['match']))
{
        echo $_SESSION['match'];
unset($_SESSION['match']);
}



if(isset($_SESSION['no-login-message']))
{
        echo $_SESSION['no-login-message'];
unset($_SESSION['no-login-message']);
}
?><br>


        
<form action=""method="POST" > 
        <b> Full Name  : </b> <br>
            <input type="text" name ="fullname" placeholder="Enter your name" required><br><br>
            <b> Email  : </b> <br>
            <input type="text" name ="email" placeholder="Enter your email address" required><br><br>
            <b>Contact No.  : </b> <br>
            <input type="number" name ="contactno" placeholder="Enter your contact number" required><br><br>
           <b> Institute Name  : </b> <br>
            <input type="text" name ="institutename" placeholder="Enter your username" required><br><br>
           <b> Institute Id  : </b><br>

           <input type="number" name ="instituteid" placeholder="Enter your name" required><br><br>
            <b> Respective Admin  : </b> <br>
            <input type="text" name ="respectiveadmin" placeholder="Enter your email address" required><br><br>
            <b> Aadhar Card  : </b> <br>
            <input type="number" name ="aadharcard" placeholder="Enter your mobile number" required><br><br>
           
           <b> Password : </b><br>
            <input type="password" name="password" placeholder="Enter your password" required></br><br>
            <b> Confirm Password  : </b><br>
            <input type="password" name="cpassword" placeholder="Enter your password" required></br><br><br>
            <input type="submit" name="submit" value="Signup" class="btn-signup">


        </form><hr><br>
     

    </div>


</body>
</html>


<?php 

if(isset($_POST['submit']))
{
  $fullname=$_POST['fullname'];
  $email=$_POST['email'];
  $contactno=$_POST['contactno'];
  $institutename=$_POST['institutename'];
  $instituteid=$_POST['instituteid'];
  $respectiveadmin=$_POST['respectiveadmin'];
  $aadharcard=$_POST['aadharcard'];
 
 


  $raw=md5($_POST['password']);
  $password=mysqli_real_escape_string($conn,$raw);
  $raw=md5($_POST['cpassword']);
  $cpassword=mysqli_real_escape_string($conn,$raw);


  $sql="INSERT INTO signupuser SET
  fullname='$fullname',
  email='$email',
  contactno='$contactno',
  institutename='$institutename',
  instituteid='$instituteid',
  respectiveadmin='$respectiveadmin',
  aadharcard='$aadharcard',
  password='$password',
  cpassword='$cpassword'
  ";
  $res=mysqli_query($conn,$sql);
  if($res==true){
      //echo"inserted";
      if($password==$cpassword){
        header("location:".SITEURL.'login.php');

      }
      if($password!=$cpassword){
        $_SESSION['match']="<div class='error'>Confirm Password did not match</div>";
        header("location:".SITEURL.'signup.php');

      }
     

     
      }
      else
      {
      // echo"failed ";
      $_SESSION['add']="<div class='error'>Failed to create account</div>";
      header("location:".SITEURL.'signup.php');
      }
      }
          
      ?>
  