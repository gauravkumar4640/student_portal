<?php 
include('partials/menu.php');
?>
        
        <div class="main-content">
        <div class="wrapper">
       <h1>Dashbord</h1>

    
<?php 

if(isset($_SESSION['login']))
{
        echo $_SESSION['login'];
unset($_SESSION['login']);
}
?>
<br>

<div class="col-4 text-center">
      
<?php 

$sql="SELECT * FROM enrollment_details";
$res=mysqli_query($conn,$sql);
$count=mysqli_num_rows($res); 
?>
                    <h1><?php echo $count;?></h1><br>
           Enrolled Students
       </div>


      
<div class="col-4 text-center">
      
      <?php 
      
      $sql="SELECT * FROM course_details";
      $res=mysqli_query($conn,$sql);
      $count=mysqli_num_rows($res); 
      ?>
                          <h1><?php echo $count;?></h1><br>
                 Enrolled Courses
             </div>
       
<div class="col-4 text-center">
      
      <?php 
      
      $sql="SELECT * FROM verification";
      $res=mysqli_query($conn,$sql);
      $count=mysqli_num_rows($res); 
      ?>
                          <h1><?php echo $count;?></h1><br>
                 HSC verified
             </div>
      
<div class="col-4 text-center">
      
      <?php 
      
      $sql="SELECT * FROM verification";
      $res=mysqli_query($conn,$sql);
      $count=mysqli_num_rows($res); 
      ?>
                          <h1><?php echo $count;?></h1><br>
                 SSC verified
             </div>
      <div class="clear-fix">

      </div>
        </div>  
        </div>

     