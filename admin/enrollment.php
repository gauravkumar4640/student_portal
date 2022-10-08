<?php 
include('partials/menu.php');
?>


<div class="main-content">
    <div class="wrapper">
    <h1>Enrollment Information </h1>
    


    
<?php

if(isset($_SESSION['remove'])){
        echo $_SESSION['remove'];
        unset($_SESSION['remove']); 
    }
    
if(isset($_SESSION['delete'])){
        echo $_SESSION['delete'];
        unset($_SESSION['delete']); 
    }
    
if(isset($_SESSION['no-category-found'])){
        echo $_SESSION['no-category-found'];
        unset($_SESSION['no-category-found']); 
    }
      
if(isset($_SESSION['update'])){
        echo $_SESSION['update'];
        unset($_SESSION['update']); 
    }
         
if(isset($_SESSION['upload'])){
        echo $_SESSION['upload'];
        unset($_SESSION['upload']); 
    }
        
if(isset($_SESSION['failed-remove'])){
        echo $_SESSION['failed-remove'];
        unset($_SESSION['failed-remove']); 
    }
?>


<br><br> 

<form action="" metho="POST">
<table class="table table-success table-striped" style="width: 60rem; " >

<thead>
<td>S.No.</td>
<td>Name</td>
<td>Enrollment Number</td>
<td>Father Name</td>
<td>Mother Name</td>
<td>Current Sem</td>
<td>Academic Year</td>


</thead>


<?php
$sql="SELECT * FROM enrollment_details";
$res=mysqli_query($conn,$sql);

if($res==true){
$count=mysqli_num_rows($res);
$sn=1;
if($count>0){
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
