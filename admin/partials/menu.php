<?php 

include('../config/constant.php ');
//include('login_check.php ');

?>

<?php include 'sqlconnection.php';?>
<html>
    <head>
        <title>ERP Portal</title> 
        <link rel="stylesheet" href="../css/1.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    </head>


    <body>
        <div class="menu">
        <div class="wrapper">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="manage_admin.php">Admin</a></li>
            <li><a href="enrollment.php">Enrollment</a></li>
            <li><a href="verification.php">Verification</a></li>
            <li><a href="course_details.php">Course Details</a></li>
            <li><a href="personal_details.php">Personal Details</a></li>
            <li><a href="logout.php">Log out</a></li>
        </ul>
        </div>    
       

        </div> 