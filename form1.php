<?php
if(isset($_POST['course_code'])){
    $server = "localhost";
    $username = "root";
    $password = "";
    $con = mysqli_connect($server, $username, $password);

    if(!$con){
        die("failed".mysqli_connect_error());
    }
    // echo "success";
    $course_code = $_POST['course_code'];
    $course_name= $_POST['course_name'];
    $Prerequitists_entry= $_POST['Prerequitists_entry'];
    $SEM_Year= $_POST['SEM_Year'];
    $Department= $_POST['Department'];
    $CAY= $_POST['CAY'];
    $sql = "INSERT INTO `e_form`.`entry` (`course_code`, `course_name`, `Prerequitists_entry`, `SEM_Year`, `Department`, `CAY`, `Date/time`) VALUES ('$course_code', '$course_name', '$Prerequitists_entry', '$SEM_Year', '$Department', '$CAY', current_timestamp());";
    // echo $sql;
    if($con->query($sql) == true){
        // echo "succesfully inserted";
    }
    else{
        echo "ERROR: $sql <br> $con->error";

    }
    $con->close();
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculam Gap System</title>
</head>
<body>
<nav class="navbar background">
        <ul class="nav-list">
            <ul class="logo"><img src="logo.jpg" alt="logo"></ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        <div class="rightnav">
            <!-- <input type="text" name="search" class="search">
            <button class="btn btn-sm">Search</button> -->
        </div>
    </nav>
    </nav>
<div class="full">
    <div class="heading"><p>Curriculam Gap System</p></div>
    <div class="entry">
        <h1>Entry form</h1>
    </div>
    <!-- if($insert == true){
        echo "<p class='submitMsg'>Thanks for submitting your form</p>";
        } -->
    <div class="form">
        <form action="form1.php" method="post">
    <label for="course_code" class="cc">Course_code:</label><br>
    <input type="text" class="gg" name="course_code"  size="50"/><br>
    <label for="course_name" class="cc">Course_name:</label><br>
    <input type="text" name="course_name" /><br>
    <label for="Prerequitists_entry" class="cc">Prerequitists_entry</label><br>
    <input type="text" name="Prerequitists_entry" /><br>
    <label for="SEM_Year" class="cc">SEM/Year</label><br>
    <input type="text" name="SEM_Year" /><br>
    <label for="Department" class="cc">Department</label><br>
    <input type="text" name="Department" /><br>
    <label for="academic year" class="cc">CAY</label><br>
    <input type="text" name="CAY" /><br>
    <!-- <label for="sub" class="cc">submit</label> -->
    <button class="btn">Submit</button>
    <p class="href"><a href="form2.php">next</a></p>
    </form>
    </div>
    
</div>
</body>
<style>
    .search{

    }
html{
    background:url('bg1.jpg') no-repeat center center fixed;
    background-size:cover;
}
    *{
        
        margin:0%;
        padding:0%;
    }
    a{
        text-decoration:none;
        color:white;
    }
    a:hover{
        color:black;
    }
    .href{
        font-size:25px;
        text-decoration:none;
        color:white;
    }
    .navbar{
        background-color:black;
        display: flex;
    }
    .nav-list{
        width:50%;
        display: flex;
        /* justify-content: center; */
        align-items: center;
        

    }
    .nav-list li{
        list-style: none;
        /* display: flex; */
        padding: 26px 30px;

    }
    .nav-list li a:hover{
        text-decoration: none;
        color: rgb(252, 34, 34);

    }
    .rightnav{
        width: 50%;
        text-align: right;
    }
    .logo{
        width: 20%;
        display: flex; 
         justify-content: center;
        align-items: center;
        /* border-style: solid; */
        /* border-radius: 25px; */
    }
    .logo img{
        width: 80px;
         border-style: solid;
        border-radius: 40px;
    }
    #search{
        padding: 5px;
        font-size: 17px;
        border:2px solid gray;
        padding-top: 10px;
        border-radius: 10px;
    }
    .background{
        /* background:rgba(0,0,0,0.7)url('bg1.jpg'); */
        background:url('bg1.jpg') no-repeat center center fixed;
    background-size:cover;
        background-size: cover;
        background-blend-mode: darken;
    }
    .full{
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
    }
    body,html{
        height:100%;
    }
    
    body{
        /* margin:20%; */
        /* padding:20%; */
        background:url('bg1.jpg') no-repeat center center fixed;
    background-size:cover;
        
        
        /* background-image: linear-gradient(to bottom right,red,yellow); */
        /* background-repeat: no-repeat; */
        /* background-size:cover; */
        height: 100%;
    }
    
    .heading{
        
        text-align: center;
        
        font-size: 50px;
       
        /* margin-top: -45px;
        margin-bottom: -45px;
        clear: both; */
       
    }
    .entry{
        
        text-align: center;
    }
    
    .form{
      
        margin: auto;
        padding-left: 3%;
        padding-top: 3%;
        padding-bottom: 20px;
    }
    .cc{
        
         line-height: 25px;
    }
    input[type="text"]:hover{
        
        background-color: rgb(75, 71, 71);
    }
    input[type="text"]{
        width: 70%;
        height: 25px;
    }
    
    .form{
        border-style:solid;
        box-sizing: border-box;
       
        border-radius: 50px;
        background-color:rgba(80, 77, 77, 0.7);
    }
    button.btn:hover{
        background-color:rgb(0, 141, 31);
        box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
    }
    .btn{
        background-color: rgb(68, 255, 68);
        /* padding: 20px; */
        margin-left: 35%;
        margin-top: 11px;

    }
    input [type="text" id="search"]{
        width:40%;
    }
    

</style>
</html>


