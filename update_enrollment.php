<?php 
include('partialsuser/menu.php');
?>


<div class="main-content">
    <div class="wrapper">
        <h1>Update Enrollment Information</h1><br><br>


<?php

$id=$_GET['id'];

$sql="SELECT * FROM enrollment_details WHERE id=$id";
$res=mysqli_query($conn,$sql);

if($res==true){
$count=mysqli_num_rows($res);
if($count==1)
{
$row=mysqli_fetch_assoc($res);
            $name=$row['name'];
            $enrollment_no=$row['enrollment_no'];
            $father_name=$row['father_name'];
            $mother_name=$row['mother_name'];
            $current_sem=$row['current_sem'];
            $academic_year=$row['academic_year'];


}

else
{
    header("location:".SITEURL.'enrollment.php');
}}
?>


        <form action="" method="post">
        <table class="tbl-30">
        <table class="table table-success table-striped" style="width: 25rem; " >

<tr>
    <td>Name: </td>
    <td><input type="text" name="name" value="<?php echo $name;?>"></td>
</tr> <tr>
    <td>Enrollment Number: </td>
    <td><input type="number" name="enrollment_no" value="<?php echo $enrollment_no;?>"></td>
</tr>
<tr>
    <td>Father Name: </td>
    <td><input type="text" name="father_name" value="<?php echo $father_name;?>"></td>
</tr>
<tr>
    <td>Mother Name: </td>
    <td><input type="text" name="mother_name" value="<?php echo $mother_name;?>"></td>
</tr> <tr>
    <td>Current Sem: </td>
    <td><input type="number" name="current_sem" value="<?php echo $current_sem;?>"></td>
</tr>
<tr>
    <td>Academic Year: </td>
    <td><input type="year" name="academic_year" value="<?php echo $academic_year;?>"></td>
</tr>

            <tr>
                <td colspan="2">
                    <input type="hidden" name="id" value="<?php echo "$id";?>">
                    <input type="submit" name="submit" value="Update Enrollment Information" class="btn-secondary">
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
        $father_name=$_POST['father_name'];
        $mother_name=$_POST['mother_name']; 
        $current_sem=$_POST['current_sem'];
        $academic_year=$_POST['academic_year'];
       
   
   
       $sql = "UPDATE enrollment_details SET
       name='$name',
       enrollment_no='$enrollment_no',
       father_name='$father_name',
       mother_name='$mother_name',
       current_sem='$current_sem',
       academic_year='$academic_year'
       WHERE id='$id' ";





$res=mysqli_query($conn,$sql);

if($res==true){
    $_SESSION['update']="<div class='success'>Enrollment Information Updated successfully</div>";
    header("location:".SITEURL.'enrollment.php');
    }
    else
    {
   
    $_SESSION['update']="<div class='error'>Failed to update Enrollment Information </div>";
    header("location:".SITEURL.'enrollment.php');
    }

}
?>


