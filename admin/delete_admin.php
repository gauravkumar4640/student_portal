<?php
include('./config/constant.php');

$id =$_GET['id'];

$sql="DELETE FROM admin WHERE id=$id";

$res=mysqli_query($conn,$sql);
if($res==TRUE){
   
    $_SESSION['delete']="<div class='success'>Admin deleted successfully</div>";
    header("location:".SITEURL.'admin/manage_admin.php');
    }
    else
    {
   
    $_SESSION['delete']="<div class='error'>failed to delete admin </div>";
    header("location:".SITEURL.'admin/manage_admin.php');
    }

?>