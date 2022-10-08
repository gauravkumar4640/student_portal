<?php 
include('partialsuser/menu.php');
?>


<div class="main-content">
    <div class="wrapper">

    <h1>Add Verification Information</h1><br>


      
    <?php
if(isset($_SESSION['add'])){
    echo $_SESSION['add'];
    unset($_SESSION['add']); 
}
if(isset($_SESSION['upload'])){
    echo $_SESSION['upload'];
    unset($_SESSION['upload']); 
}
 
?><br>


    <form action="" method="post" enctype="multipart/form-data">
    <table class="table table-success table-striped" style="width: 32rem; " >
           <tr>
               <th>Name : </th>
               <td><input type="text" name="name" placeholder="enter your name here" required> </td>
           </tr>
        
           <tr>
               <th>Enrollment Number : </th>
               <td><input type="number" name="enrollment_no" required> </td>
           </tr>
          
           <tr>
               <th>SSC Marksheet : </th>
            <td><input type="file" name="x_marksheet"></td>
           </tr>
           
           <tr>
               <th>HSC Marksheet : </th>
            <td><input type="file" name="xii_marksheet"></td>
           </tr>
         
           <tr>
               
           </tr>
           <tr>
              
                <td colspan="2">
                    <input type="submit" name="submit" value="Add Information" class="btn-secondary">
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





   $sql = "INSERT INTO verification SET
   name='$name',
   enrollment_no='$enrollment_no',
   x_marksheet='$x_marksheet',
   xii_marksheet='$xii_marksheet'
  
   ";

    $res=mysqli_query($conn,$sql) ;
  

if($res==TRUE){
//echo"inserted";
$_SESSION['add']="<div class='success'>Documents Added Successfully !!</div>";
header("location:".SITEURL.'verification.php');
}
else
{
// echo"failed ";
$_SESSION['add']="<div class='error'>failed to add Documents </div>";
header("location:".SITEURL.'verification.php');
}



}
?>