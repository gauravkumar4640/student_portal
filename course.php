<?php 
include('partialsuser/menu.php');
?>

<div style="display:flex;">


    <h2>Educational General Information</h2> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

 <!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
  If Migrated to another school 
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <div class="modal-body">
      <form>
  <div class="form-group">
    <label for="exampleFormControlFile1">Migration Certificate</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <input type="button" id="btnShowMsg" class="btn btn-primary" data-dismiss="modal" value="Add" onClick="showMessage()" />
      </div>
    </div>
  </div>
</div>



</div>
    <br>
    
    <script type="text/javascript">
            function showMessage() {
                alert("Greetings!! your migration certificate has been succesfully added");
            }
        </script>
    
       
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
    <td>Degree</td>
    <td>Institute</td>
    <td>Branch</td>
    <td>Completion Year</td>
    <td>Update</td>
    
  </thead>


  
  <?php
$sql="SELECT * FROM course_details";
$res=mysqli_query($conn,$sql);

if($res==true){
    $count=mysqli_num_rows($res);
    $sn=1;


    if($count==0)
    {
?>
<a href="add_course.php" target="main" class="btn-primary">Add Educational General Information</a><br><br>

<?php
    }
    
else    {
        while($row=mysqli_fetch_assoc($res)){
            $id=$row['id'];
            $name=$row['name'];
            $enrollment_no=$row['enrollment_no'];
            $degree=$row['degree'];
            $institute=$row['institute'];
            $branch=$row['branch'];
            $completion_year=$row['completion_year'];
          
            

            ?>
              <tr>
  <tbody>
    <tr>
    <td><?php echo $sn++;?> </td>
<td><?php echo $name;?></td>
<td><?php echo $enrollment_no;?></td>
<td><?php echo $degree;?> </td>
<td><?php echo $institute; ?></td>
<td><?php echo $branch;?></td>
<td><?php echo $completion_year;?> </td>

   



<td>

<a href="<?php echo SITEURL;?>update_course.php?id=<?php echo $id; ?>" target="main"  class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;Update&nbsp;</a> 
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