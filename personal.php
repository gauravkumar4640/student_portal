<?php 
include('partialsuser/menu.php');
?>

    <h2>Personal Information</h2>
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
    <table class="table table-success table-striped" style="width: 57rem; " >

    <thead>
    <td>S.No.</td>
    <td>Name</td>
    <td>Enrollment No.</td>
    <td>Sex</td>
    <td>Nationality</td>
    <td>Email</td>
    <td>Phone No.</td>
    <td>City</td>
    <td>Update</td>
    
  </thead>


  <?php
$sql="SELECT * FROM personal_details";
$res=mysqli_query($conn,$sql);

if($res==true){
    $count=mysqli_num_rows($res);
    $sn=1;
    if($count==0)
    {
      ?>
      <a href="add_personal.php" target="main" class="btn-primary">Add Personal Information</a><br><br>

    
       
      
      
      <?php
    }
    
    else{
        while($row=mysqli_fetch_assoc($res)){
            $id=$row['id'];
            $name=$row['name'];
            $enrollment_no=$row['enrollment_no'];
            $sex=$row['sex'];
            $nationality=$row['nationality'];
            $email=$row['email'];
            $phone_no=$row['phone_no'];
            $city=$row['city'];
            

            ?>
<tbody>
<td><?php echo $sn++;?> </td>
<td><?php echo $name;?></td>
<td><?php echo $enrollment_no;?></td>
<td><?php echo $sex;?> </td>
<td><?php echo $nationality;?></td>
<td><?php echo $email;?> </td>
<td><?php echo $phone_no;?></td>
<td><?php echo $city;?></td>





<td>
<a href="<?php echo SITEURL;?>update_personal.php?id=<?php echo $id; ?>" target="main" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;Update&nbsp;</a> 
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