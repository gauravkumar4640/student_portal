<?php 
include('partialsuser/menu.php');
?>


<div class="main-content">
    <div class="wrapper">

    <h1>Add Personal Information</h1><br>

<?php
if(isset($_SESSION['add'])){
    echo $_SESSION['add'];
    unset($_SESSION['add']); 
}
 
?><br>





    <form action="" method="post">
       
    <table class="table table-success table-striped" style="width: 25rem; " >

            <tr>
                <td>Name: </td>
                <td><input type="text" name="name" placeholder="Enter your name" required></td>
            </tr> <tr>
                <td>Enrollment Number: </td>
                <td><input type="number" name="enrollment_no" placeholder="Enter your enrollment number" required></td>
            </tr>
            <tr>
                <td>Sex: </td>
                <td><input type="text" name="sex" placeholder="Enter your father name" required></td>
            </tr>
            <tr>
                <td>Nationality: </td>
                <td><input type="text" name="nationality" placeholder="Enter your mother name" required></td>
            </tr> <tr>
                <td>Email: </td>
                <td><input type="text" name="email" required></td>
            </tr>
            <tr>
                <td>Phone No.: </td>
                <td><input type="number" name="phone_no" required></td>
            </tr>
            <tr>
                <td>City: </td>
                <td><input type="text" name="city" required></td>
            </tr>
          
            <tr>
                <td colspan="2">
                    <input type="submit" name="submit" value="Add Personal Information" class="btn-secondary" >
                </td>
            </tr>


        </table>

    </form>
    </div>
</div>






<?php

if(isset($_POST['submit'])){
     $name=$_POST['name'];
     $enrollment_no=$_POST['enrollment_no'];
     $sex=$_POST['sex'];
     $nationality=$_POST['nationality']; 
     $email=$_POST['email'];
     $phone_no=$_POST['phone_no'];
     $city=$_POST['city'];
    


    $sql = "INSERT INTO personal_details SET
    name='$name',
    enrollment_no='$enrollment_no',
    sex='$sex',
    nationality='$nationality',
    email='$email',
    phone_no='$phone_no' ,
    city='$city'";

    $res=mysqli_query($conn,$sql);
if($res==TRUE){
//echo"inserted";
$_SESSION['add']="<div class='success'>Personal Information added successfully</div>";
header("location:".SITEURL.'personal.php');
}
else
{
// echo"failed ";
$_SESSION['add']="<div class='error'>failed to add Personal Information</div>";
header("location:".SITEURL.'personal.php');
}
}


?>