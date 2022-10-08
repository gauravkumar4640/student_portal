<?php 
include('partialsuser/menu.php');
?>


<div class="main-content">
    <div class="wrapper">
        <h1>Update Documents</h1><br><br>


<?php

$id=$_GET['id'];

$sql="SELECT * FROM verification WHERE id=$id";
$res=mysqli_query($conn,$sql);

if($res==true){
$count=mysqli_num_rows($res);
if($count==1)
{
$row=mysqli_fetch_assoc($res);

$name=$row['name'];
$enrollment_no=$row['enrollment_no'];
$x_marksheet=$row['x_marksheet'];
$xii_marksheet=$row['xii_marksheet'];

}

else
{
    header("location:".SITEURL.'verification.php');
}}
?>


<form action="" method="post">
<table class="table table-success table-striped" style="width: 32rem; " >
           <tr>
               <th>Name : </th>
               <td><input type="text" name="name" value="<?php echo $name;?>"> </td>
</tr>

           <tr>
               <th>Enrollment Number : </th>
               <td><input type="number" name="enrollment_no" value="<?php echo $enrollment_no;?>"> </td>
           </tr>
           <tr>
               <th>SSC Marksheet : </th>
               <td><input type="file" name="x_marksheet" value="<?php echo $x_marksheet;?>"></td>
           </tr>
           <tr>
               <th>HSC Marksheet : </th>
               <td><input type="file" name="xii_marksheet" value="<?php echo $xii_marksheet;?>"></td>
           </tr>
          
           <tr>
                <td colspan="2">
                <input type="hidden" name="id" value="<?php echo "$id";?>">
                    <input type="submit" name="submit" value="Update Documents" class="btn-secondary">
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
   
 
   
    $x_marksheet=$_FILES['x_marksheet']['name'];
    $file_loc=$_FILES['x_marksheet']['tmp_name'];
    $file_size=$_FILES['x_marksheet']['size'];
    $file_type=$_FILES['x_marksheet']['type'];
    $folder="pdf/";
    
    move_uploaded_file($file_loc,$folder.$file);
    
    
    
       
    $xii_marksheet=$_FILES['xii_marksheet']['name'];
    $file_loc=$_FILES['xii_marksheet']['tmp_name'];
    $file_size=$_FILES['xii_marksheet']['size'];
    $file_type=$_FILES['xii_marksheet']['type'];
    $folder="pdf/";
    
    move_uploaded_file($file_loc,$folder.$file);
    
   
   

    $sql = "UPDATE verification SET
    id='$id', 
    name='$name',
   enrollment_no='$enrollment_no',
   x_marksheet='$x_marksheet',
   xii_marksheet='$xii_marksheet'
    WHERE id='$id'";

$res=mysqli_query($conn,$sql);



if($res==true){
    $_SESSION['update']="<div class='success'>Documents updated successfully</div>";
    header("location:".SITEURL.'verification.php');
    }
    else
    {
   
    $_SESSION['update']="<div class='error'>Failed to update Documents </div>";
    header("location:".SITEURL.'verification.php');
    }

}
?>

