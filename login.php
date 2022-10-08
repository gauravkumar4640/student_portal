<?php
include('config/constant.php ');
?>

<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
    <link rel="stylesheet" href="css/style.css">
	
</head>
<style>
    body {
	display: flex;
	justify-content: center;
	align-items: center;
	height: 100vh;
	flex-direction: column;
	

    background-image: url('assets/img/1.jpg');
 
}

img {
  width: 200px;
  height: 300px;
  object-fit: cover;
}

*{
	font-family: sans-serif;
	box-sizing: border-box;
}

form {
	width: 350px;
	border: 2px solid #ccc;
	padding: 30px;
	background: #fff;
	border-radius: 15px;
}

h2 {
	text-align: center;
	margin-bottom: 40px;
}

input {
	display: block;
	border: 2px solid #ccc;
	width: 95%;
	padding: 10px;
	margin: 10px auto;
	border-radius: 5px;
}
label {
	color: #888;
	font-size: 18px;
	padding: 10px;
}

button {
	float: right;
	background: #555;
	padding: 10px 15px;
	color: #fff;
	border-radius: 5px;
	margin-right: 10px;
	border: none;
}
button:hover{
	opacity: .7;
}
.error {
   background: #F2DEDE;
   color: #A94442;
   padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 20px auto;
}

h1 {
	text-align: center;
	color: #fff;
}

.login{
	float: right;
	background: #555;
	padding: 10px 15px;
	color: #fff;
	border-radius: 5px;
	margin-right: 10px;
	border: none;
	text-decoration: none;
}
.login:hover{
	opacity: .7;
}

.success{
    color:rgb(51, 88, 13);
    font-weight: bold;
    text-align:center;
    
}

</style>
<body>
     <form action="" method="POST">
     	<h2>LOGIN</h2>
         <br>
         <?php
         
if(isset($_SESSION['login']))
{
        echo $_SESSION['login'];
unset($_SESSION['login']);
}

         ?><br>
     
     	<label>Email</label>
     	<input type="email" name="email" placeholder="abc@gmail.com"><br>
         <label>Admin Name</label>
     	<input type="text" name="respectiveadmin" placeholder="John Doe" ><br>


     	<label>User password </label>
     	<input type="password" name="password" placeholder="password"><br>
        <p>Don't have an account? <a href="signup.php">Signup</p>

     	<button type="submit" class="login" name="submit">Login</button>
     </form>
</body>
</html>


<?php
if(isset($_POST['submit'])){

$email=mysqli_real_escape_string($conn,$_POST['email']);
$respectiveadmin=mysqli_real_escape_string($conn,$_POST['respectiveadmin']);

$password=mysqli_real_escape_string($conn,$_POST['password']);



$sql="SELECT * FROM signupuser WHERE email='$email' AND password='$password' AND respectiveadmin='$respectiveadmin'";

$res=mysqli_query($conn,$sql);

$count=mysqli_num_rows($res);
if($count==1)
{
    $_SESSION['login']="<div class='success'>login successful </div>";
    header("location:http://localhost/hackathon/frame.php");
}
else{
    $_SESSION['login']="<div class='error'>Details did not match </div>";
    header("location:".SITEURL.'login.php');

}

}
?>