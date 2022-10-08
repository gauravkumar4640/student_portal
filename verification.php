<?php 
include('partialsuser/menu.php');
?>

    <h2>Document Verification</h2><br>
    
     
       
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



<form action="" method="POST">
    <table class="table table-success table-striped" style="width: 50rem; " >

    <thead>
    <td>S.No.</td>
    <td>Name</td>
    <td>Enrollment Number</td>
    <td>SSC Marksheet</td>
    <td>HSC Marksheet</td>
    <td>Update</td>
    
  </thead>
  
  <?php
$sql="SELECT * FROM verification";
$res=mysqli_query($conn,$sql);

if($res==true){
    $count=mysqli_num_rows($res);
    $sn=1;
    if($count==0)
    {
      ?>
      <a href="add_verification.php" target="main" class="btn-primary">Add Documents</a><br><br>
      
      <?php
    }
    else{
        while($row=mysqli_fetch_assoc($res)){
            $id=$row['id'];
            $name=$row['name'];
            $enrollment_no=$row['enrollment_no'];
            $x_marksheet=$row['x_marksheet'];
            $xii_marksheet=$row['xii_marksheet'];
            
            

            ?>
  <tbody>
    <tr>
    <td><?php echo $sn++;?> </td>
<td><?php echo $name;?></td>
<td><?php echo $enrollment_no;?></td>
    <td><?php echo $x_marksheet;?></td>
    <td><?php echo $xii_marksheet;?></td>
 
<td>
<a href="<?php echo SITEURL;?>update_verification.php?id=<?php echo $id; ?>" target="main" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;Update&nbsp;</a> 
</td>
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