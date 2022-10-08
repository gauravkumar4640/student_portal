<?php 
include('partials/menu.php');
?>


<div class="main-content">
    <div class="wrapper">
    <h1>Document Verification </h1>
    


    
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

        <tr>
                <th>S.No</th>
                <th>Name</th>
                <th>Enrollment_No</th>
                <th>SSC Marksheet</th>
                <th>HSC Marksheet</th>
                <th colspan="2">Actions</th>
                
        </tr>


        <?php 

$sql="SELECT * FROM verification";
$res=mysqli_query($conn,$sql);
//if($res==TRUE)
//{
        $count=mysqli_num_rows($res);

$sn=1;

        if($count>0){
                while($rows=mysqli_fetch_assoc($res)){
                        $id=$rows['id'];
                        $name=$rows['name'];
                        $enrollment_no=$rows['enrollment_no'];
                        $x_marksheet=$rows['x_marksheet'];
                        $xii_marksheet=$rows['xii_marksheet'];
?>
 <tr>
                       <td><?php echo$sn++;?></td>
                       <td><?php echo$name;?></td>
                
                       <td><?php echo$enrollment_no;?></td>
                       <td><?php echo $x_marksheet;?></td>
                       <td><?php echo$xii_marksheet?></td>
      
                       <td>
                       <a href="sophos.pdf" download="sophos.pdf" class="btn-secondary"><i class="fa fa-download"></i>&nbsp;SSC Marksheet</a>
                       <a href="sophos.pdf" download="sophos.pdf"class="btn-secondary"><i class="fa fa-download"></i>&nbsp;HSC Marksheet</a>
                       </td>
               </tr>
<?php

                                  } } else{

                                        ?>
                                        <tr><td colspan="6"><div class="error">Documents are not uploaded yet</div></td></tr>
                                        <?php
                                   }                  ?>
                        
       
</table>

                                </form>


</div>
</div>

