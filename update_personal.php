<?php 
include('partialsuser/menu.php');
?>


<div class="main-content">
    <div class="wrapper">
        <h1>Update Personal Information</h1><br><br>


<?php

$id=$_GET['id'];

$sql="SELECT * FROM personal_details WHERE id=$id";
$res=mysqli_query($conn,$sql);


if($res==true){
    $count=mysqli_num_rows($res);
    if($count==1)
    {
    $row=mysqli_fetch_assoc($res);
    $name=$row['name'];
    $enrollment_no=$row['enrollment_no'];
    $sex=$row['sex'];
    $nationality=$row['nationality'];
    $email=$row['email'];
    $phone_no=$row['phone_no'];
    $city=$row['city'];
}

else
{
    header("location:".SITEURL.'personal.php');
}}
?>


        <form action="" method="post">
        <table class="tbl-30">
        <table class="table table-success table-striped" style="width: 25rem; " >



                           
<tr>
    <td>Name: </td>
    <td><input type="text" name="name" value="<?php echo $name;?>"></td>
</tr> 
<tr>
    <td>Enrollment Number: </td>
    <td><input type="number" name="enrollment_no" value="<?php echo $enrollment_no;?>"></td>
</tr>
            <tr>
                <td>Sex: </td>
                <td><input type="text" name="sex" value="<?php echo $sex;?>"></td>
            </tr>
            <tr>
                <td>Nationality: </td>
                <td><input type="text" name="nationality" value="<?php echo $nationality;?>"></td>
            </tr> <tr>
                <td>Email: </td>
                <td><input type="text" name="email" value="<?php echo $email;?>"></td>
            </tr>
            <tr>
                <td>Phone No.: </td>
                <td><input type="number" name="phone_no" value="<?php echo $phone_no;?>"></td>
            <tr>
                <td>City: </td>
                <td><input type="text" name="city" value="<?php echo $city;?>"></td>
            </tr>
 
           
            <tr>
                <td colspan="2">
                    <input type="hidden" name="id" value="<?php echo "$id";?>">
                    <input type="submit" name="submit" value="Update Personal Information" class="btn-secondary">
                </td>
            </tr>


        </table>

    </form>


    </div>
</div>


<?php

if(isset($_POST['submit']))
{

    $name=$_POST['name'];
     $enrollment_no=$_POST['enrollment_no'];
     $sex=$_POST['sex'];
     $nationality=$_POST['nationality']; 
     $email=$_POST['email'];
     $phone_no=$_POST['phone_no'];
     $city=$_POST['city'];
    


    $sql = "UPDATE personal_details SET
    name='$name',
    enrollment_no='$enrollment_no',
    sex='$sex',
    nationality='$nationality',
    email='$email',
    phone_no='$phone_no' ,
    city='$city' 
       WHERE id='$id' ";





$res=mysqli_query($conn,$sql);

if($res==true){
    $_SESSION['update']="<div class='success'>Personal Information Updated successfully</div>";
    header("location:".SITEURL.'personal.php');
    }
    else
    {
   
    $_SESSION['update']="<div class='error'>Failed to update Personal Information </div>";
    header("location:".SITEURL.'personal.php');
    }

}
?>


