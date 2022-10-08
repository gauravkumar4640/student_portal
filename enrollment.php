<?php 
include('partialsuser/menu.php');
?>

    <h2>Enrollment Information</h2>
    <br>
   

    
       
<?php
if(isset($_SESSION['add'])){
    echo $_SESSION['add'];
    unset($_SESSION['add']); 
}
 
if(isset($_SESSION['update'])){
    echo $_SESSION['update'];
    unset($_SESSION['update']); 
}
 
?>


    <form action="" metho="POST">
    <table class="table table-success table-striped" style="width: 54rem; " >

    <thead>
    <td>S.No.</td>
    <td>Name</td>
    <td>Enrollment Number</td>
    <td>Father Name</td>
    <td>Mother Name</td>
    <td>Current Sem</td>
    <td>Academic Year</td>
    <td>Update</td>
    
  </thead>


  <?php

$sql="SELECT * FROM enrollment_details";
$res=mysqli_query($conn,$sql);

if($res==true){
    $count=mysqli_num_rows($res);
    $sn=1;
     
  if($count==0){
    ?>
    
    <a href="add_enrollment.php" target="main" class="btn-primary">Add Enrollment Information</a><br><br>
  
<?php
  }

  else{
        while($row=mysqli_fetch_assoc($res)){
            $id=$row['id'];
            $name=$row['name'];
            $enrollment_no=$row['enrollment_no'];
            $father_name=$row['father_name'];
            $mother_name=$row['mother_name'];
            $current_sem=$row['current_sem'];
            $academic_year=$row['academic_year'];
            

            ?>
              <tr>
              <tbody>
<td><?php echo $sn++;?> </td>
<td><?php echo $name;?></td>
<td><?php echo $enrollment_no;?></td>
<td><?php echo $father_name;?> </td>
<td><?php echo $mother_name;?></td>
<td><?php echo $current_sem;?> </td>
<td><?php echo $academic_year;?></td>





<td>
<a href="<?php echo SITEURL;?>update_enrollment.php?id=<?php echo $id; ?>" target="main" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;Update&nbsp;</a> 
</td>
</tr>
</tbody>
            
            <?php
         
        }
    }
}
?>

        
</table>
</form>
</body>
</html>