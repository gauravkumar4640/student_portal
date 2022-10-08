<?php 
include('partialsuser/menu.php');
?>


<div class="main-content">
    <div class="wrapper">

    <h1>Add Enrollment Information</h1><br>

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
                <td>Father Name: </td>
                <td><input type="text" name="father_name" placeholder="Enter your father name" required></td>
            </tr>
            <tr>
                <td>Mother Name: </td>
                <td><input type="text" name="mother_name" placeholder="Enter your mother name" required></td>
            </tr> <tr>
                <td>Current Sem: </td>
                <td><input type="number" name="current_sem" required></td>
            </tr>
            <tr>
                <td>Academic Year: </td>
                <td><input type="year" name="academic_year" required></td>
            </tr>
          
            <tr>
                <td colspan="2">
                    <input type="submit" name="submit" value="Add Enrollement Information" class="btn-secondary" >
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
     $father_name=$_POST['father_name'];
     $mother_name=$_POST['mother_name']; 
     $current_sem=$_POST['current_sem'];
     $academic_year=$_POST['academic_year'];
    


    $sql = "INSERT INTO enrollment_details SET
    name='$name',
    enrollment_no='$enrollment_no',
    father_name='$father_name',
    mother_name='$mother_name',
    current_sem='$current_sem',
    academic_year='$academic_year' ";

    $res=mysqli_query($conn,$sql);
if($res==TRUE){
//echo"inserted";
$_SESSION['add']="<div class='success'>Enrollment Information added successfully</div>";
header("location:".SITEURL.'enrollment.php');
}
else
{
// echo"failed ";
$_SESSION['add']="<div class='error'>failed to add Enrollment Information</div>";
header("location:".SITEURL.'enrollment.php');
}
}


?>