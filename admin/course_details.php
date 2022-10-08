<?php 
include('partials/menu.php');
?>


<div class="main-content">
    <div class="wrapper">
    <h1>Course Details</h1>
    



    <?php 
     if(isset($_SESSION['add'])){
        echo $_SESSION['add'];
        unset($_SESSION['add']); 
    }
    if(isset($_SESSION['remove'])){
        echo $_SESSION['remove'];
        unset($_SESSION['remove']); 
    }
    if(isset($_SESSION['delete'])){
        echo $_SESSION['delete'];
        unset($_SESSION['delete']); 
    }
   
    if(isset($_SESSION['upload'])){
        echo $_SESSION['upload'];
        unset($_SESSION['upload']); 
    }
    if(isset($_SESSION['remove-failed'])){
        echo $_SESSION['remove-failed'];
        unset($_SESSION['remove-failed']); 
    }
    if(isset($_SESSION['update'])){
        echo $_SESSION['update'];
        unset($_SESSION['update']); 
    }
   
   
    ?>
    <br><br>

    <form action="" metho="POST">
<table class="table table-success table-striped" style="width: 50rem; " >

        <tr> 
                <th>S.No</th>
                <th>Name</th>
                <th>Enrollment_No</th>
                <th>Degree</th>
                <th>Branch</th>
                <th>Completion_Year</th>
                
        </tr>

        <?php
                $sql="SELECT * FROM course_details";
                $res=mysqli_query($conn,$sql);

                $count=mysqli_num_rows($res);

                $sn=1;

                if($count>0){

                        while($row=mysqli_fetch_assoc($res)){
                                $id=$row['id'];
                                $name=$row['name'];
                                $enrollment_no=$row['enrollment_no'];
                                $degree=$row['degree'];
                                $branch=$row['branch'];
                                $completion_year=$row['completion_year'];

                                ?> 
                        <tr>
                                <td><?php echo $sn++;?></td>
                                <td><?php echo $name;?></td>
                                <td><?php echo $enrollment_no;?></td>
                                <td><?php echo $degree;?></td>
                                <td><?php echo $branch;?></td>
                                <td><?php echo $completion_year;?></td>
                        
                               
                        </tr>
                                
                                <?php


                        }
                }
                else{
                        echo "<tr><td colspan='7' class='error'> Course details are not available...</td></tr>";
                }


        ?>


       
       
</table>
        </form>
</div>
</div>

