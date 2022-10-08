<?php 
include('partialsuser/menu.php');
?>


<div class="main-content">
    <div class="wrapper">

    <h1>Add Educational General Information</h1><br>

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
                <td>Degree: </td>
                <td><input type="text" name="degree" placeholder="Enter your father name" required></td>
            </tr>
            <tr>
                <td>Institute: </td>
                <td><input type="text" name="institute" placeholder="Enter your mother name" required></td>
            </tr>
            <tr>
                <td>Branch: </td>
                <td><input type="text" name="branch" required></td>
            </tr>
            <tr>
                <td>Completion Year: </td>
                <td><input type="year" name="completion_year" required></td>
            </tr>
          
            <tr>
                <td colspan="2">
                    <input type="submit" name="submit" value="Add Educational General Information" class="btn-secondary" >
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
     $degree=$_POST['degree'];
     $institute=$_POST['institute']; 
     $branch=$_POST['branch'];
     $completion_year=$_POST['completion_year'];
    


    $sql = "INSERT INTO course_details SET
    name='$name',
    enrollment_no='$enrollment_no',
    degree='$degree',
    institute='$institute',
    branch='$branch',
    completion_year='$completion_year' ";

    $res=mysqli_query($conn,$sql);
if($res==TRUE){
//echo"inserted";
$_SESSION['add']="<div class='success'>Educational General Information added successfully</div>";
header("location:".SITEURL.'course.php');
}
else
{
// echo"failed ";
$_SESSION['add']="<div class='error'>failed to add Educational General Information</div>";
header("location:".SITEURL.'course.php');
}
}


?>