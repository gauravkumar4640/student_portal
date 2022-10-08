<?php 
include('partials/menu.php');
?>


<div class="main-content">
    <div class="wrapper">
    <h1>Personal Details</h1>
  
   <br>
   <?php
   
   if(isset($_SESSION['update'])){
           echo $_SESSION['update'];
           unset($_SESSION['update']);
   }
   
   ?>
<br><br>
<form action="" metho="POST">
<table class="table table-success table-striped" style="width: 60rem; " >

        <tr>
                <th>S.No</th>
                <th>Name</th>
                <th>Enrollment_No</th>
                <th>Sex</th>
                <th>Email</th>
                <th>Contact_No</th>
                <th>City</th>
               
        </tr>

        <?php 
        
        $sql="SELECT * FROM personal_details"; 
        $res=mysqli_query($conn,$sql);
        $sn=1;

        $count=mysqli_num_rows($res);
        if($count>0){

                while($row=mysqli_fetch_assoc($res)){
                        $id=$row['id'];
                        $name=$row['name'];
                        $enrollment_no=$row['enrollment_no'];
                        $sex=$row['sex'];
                        $email=$row['email'];
                        $phone_no=$row['phone_no'];
                        $city=$row['city'];
                        

                        ?>
                        
        <tr>
                <td><?php echo $sn++;?></td>
                <td><?php echo $name;?></td>
                <td><?php echo $enrollment_no;?></td>
                <td><?php echo $sex;?></td>
                <td><?php echo $email?></td>
                <td><?php echo $phone_no;?></td>
                <td><?php echo $city;?></td>
               
        </tr>
       
                        
                        
                        <?php


                }

        }
        else{
                echo" <tr><td colspan='12>' <div class='error'>Personal details are not added yet...</div></td></tr>";
        }
        
        ?>
</table>
</form>
</div>
</div>

