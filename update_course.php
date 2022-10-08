<?php 
include('partialsuser/menu.php');
?>


<div class="main-content">
    <div class="wrapper">
        <h1>Update Educational General Information</h1><br><br>


<?php

$id=$_GET['id'];

$sql="SELECT * FROM course_details WHERE id=$id";
$res=mysqli_query($conn,$sql);

if($res==true){
$count=mysqli_num_rows($res);
if($count==1)
{
$row=mysqli_fetch_assoc($res);
$name=$row['name'];
$enrollment_no=$row['enrollment_no'];
$degree=$row['degree'];
$institute=$row['institute'];
$branch=$row['branch'];
$completion_year=$row['completion_year'];


}

else
{
    header("location:".SITEURL.'course.php');
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
                <td>Degree: </td>
                <td><input type="text" name="degree" value="<?php echo $degree;?>"></td>
            </tr>
            <tr>
                <td>Institute: </td>
                <td><input type="text" name="institute" value="<?php echo $institute;?>"></td>
            </tr> 
            <tr>
                <td>Branch: </td>
                <td><input type="text" name="branch" value="<?php echo $branch;?>"></td>
            </tr>
            <tr>
                <td>Completion Year: </td>
                <td><input type="year" name="completion_year" value="<?php echo $completion_year;?>"></td>
            </tr>

            <tr>
                <td colspan="2">
                    <input type="hidden" name="id" value="<?php echo "$id";?>">
                    <input type="submit" name="submit" value="Update Educational General Information" class="btn-secondary">
                </td>
            </tr>


        </table>

    </form>


    </div>
</div>


<?php

if(isset($_POST['submit']))
{

    $id=$_POST['id'];
    $name=$_POST['name'];
    $enrollment_no=$_POST['enrollment_no'];
    $degree=$_POST['degree'];
    $institute=$_POST['institute']; 
    $branch=$_POST['branch'];
    $completion_year=$_POST['completion_year'];
   

  
   
   
       $sql = "UPDATE course_details SET
        name='$name',
        enrollment_no='$enrollment_no',
        degree='$degree',
        institute='$institute',
        branch='$branch',
        completion_year='$completion_year' 
       WHERE id='$id' ";





$res=mysqli_query($conn,$sql);

if($res==true){
    $_SESSION['update']="<div class='success'>Educational Information Updated successfully</div>";
    header("location:".SITEURL.'course.php');
    }
    else
    {
   
    $_SESSION['update']="<div class='error'>Failed to update Educational Information </div>";
    header("location:".SITEURL.'course.php');
    }

}
?>


