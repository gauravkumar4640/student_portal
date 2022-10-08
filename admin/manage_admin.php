<?php 
include('partials/menu.php');
?>
        <div class="main-content">
        <div class="wrapper">
       <h1>Manage Admin</h1>

<?php

if(isset($_SESSION['add']))
{
        echo $_SESSION['add'];
unset($_SESSION['add']);
}


if(isset($_SESSION['delete']))
{
        echo $_SESSION['delete'];
unset($_SESSION['delete']);
}


if(isset($_SESSION['update']))
{
        echo $_SESSION['update'];
unset($_SESSION['update']);
}



if(isset($_SESSION['usernotfound']))
{
        echo $_SESSION['usernotfound'];
unset($_SESSION['usernotfound']);
}


if(isset($_SESSION['passwordnotmatch']))
{
        echo $_SESSION['passwordnotmatch'];
unset($_SESSION['passwordnotmatch']);
}


if(isset($_SESSION['changepassword']))
{
        echo $_SESSION['changepassword'];
unset($_SESSION['changepassword']);
}



?><br><br>
<a href="add-admin.php" class="btn-primary"><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp;Add Admin</a><br><br><br>

       
<form action="" metho="POST">
<table class="table table-success table-striped" style="width: 60rem; " >

               <tr>
                       <th>S.No</th>
                       <th>Full_name</th>
                       <th>Username</th>
                       <th>Actions</th>
               </tr>

<?php 

$sql="SELECT * FROM admin";
$res=mysqli_query($conn,$sql);
if($res==TRUE)
{
        $count=mysqli_num_rows($res);

$sn=1;

        if($count>0){
                while($rows=mysqli_fetch_assoc($res)){
                        $id=$rows['id'];
                        $full_name=$rows['full_name'];
                        $username=$rows['username'];
                        ?>
                        
               <tr>
                       <td><?php echo$sn++;?></td>
                       <td><?php echo$full_name;?></td>
                       <td><?php echo $username;?></td>
                       <td>
                      <a href="<?php echo SITEURL;?>admin/update-admin.php?id=<?php echo $id; ?>" class="btn-secondary"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;Update admin</a>
                       <a href="<?php echo SITEURL;?>admin/delete_admin.php?id=<?php echo $id; ?>" class="btn-danger"><i class="fa fa-trash" aria-hidden="true"></i>&nbsp;Delete admin</a>
    
                       </td>
               </tr>

                        <?php
                }
        }
        else{

        }
}
?>



              
       </table>
</form>
     
        </div> 
</div>