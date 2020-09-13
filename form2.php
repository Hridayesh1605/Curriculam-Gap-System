<?php
if(isset($_POST['txn_no']))
{
    $server = "localhost";
    $username = "root";
    $password = "";
    $con = mysqli_connect($server, $username, $password);

    if(!$con){
        die("failed".mysqli_connect_error());
    }
    // echo "success";
    $txn_no = $_POST['txn_no'];
    $course_code= $_POST['course_code'];
    $Guest_lecture= $_POST['Guest_lecture'];
    $guest_name= $_POST['guest_name'];
    $guest_designation= $_POST['guest_designation'];
    $g_company_college= $_POST['g_company_college'];
    $lecture_date_and_time= $_POST['lecture_date_and_time'];
    $Nos= $_POST['Nos'];
    $sql = "INSERT INTO `hrida`.`entry` (`txn_no`, `course_code`, `Guest_lecture`, `guest_name`, `guest_designation`, `g_company_college`, `lecture date and time`, `No.of Student`) VALUES ('$txn_no', '$course_code', '$Guest_lecture', '$guest_name', '$guest_designation', '$g_company_college', '$lecture_date_and_time', '$Nos');";
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
    
<div class="full">
    <div class="heading"><p>Curriculam Gap System</p></div>
    <div class="entry">
        <h1>Curriculam Gap</h1>
    </div>
    <div class="form">
        <form action="form2.php" method="post">
        <!-- <ul class="logo"><img src="logo.jpg" alt="logo"></ul> -->
    <label for="txn_no" class="cc">txn_no</label><br>
    <input type="text" class="gg" name="txn_no"  size="50"/><br>
    <label for="course_code" class="cc">course_code</label><br>
    <input type="text" name="course_code" /><br>
    <label for="Guest_lecture" class="cc">Guest_lecture</label><br>
    <input type="text" name="Guest_lecture" /><br>
    <label for="guest_name" class="cc">guest_name</label><br>
    <input type="text" name="guest_name" /><br>
    <label for="guest_designation" class="cc">guest_designation</label><br>
    <input type="text" name="guest_designation" /><br>
    <label for="g_company_college" class="cc">g_company_college</label><br>
    <input type="text" name="g_company_college" /><br>
    <label for="lecture_date_and_time" class="cc">lecture_date_and_time</label><br>
    <input type="text" name="lecture_date_and_time" /><br>
    <label for="Nos" class="cc">Nos</label><br>
    <input type="text" name="Nos" /><br>
    <button class="btn">Submit</button>
    <button><a href="record1.php">Record</button> 
        </form>
    </div>
    
</div>
    
    
</body>
<style>
    
    .full{
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
    }
    body,html{
        height:100%;
    }
    
    body{
        
        
        background-image: linear-gradient(to bottom right,red,yellow);
        background-repeat: no-repeat;
        background-size:cover;
        height: 100vh;
    }
    
    .heading{
        
        text-align: center;
        
        font-size: 50px;
       
        margin-top: -45px;
        margin-bottom: -45px;
        clear: both;
       
    }
    .entry{
        
        text-align: center;
    }
    
    .form{
        /* border-style:solid;
       
        border-radius: 50px; */
        /* margin-right: 15%;
        margin-left: 15%; */
        margin: auto;
        padding-left: 3%;
        /* padding-top: 3%; */
        padding-bottom: 20px;
    }
    .cc{
        
         line-height: 25px;
         text-align: center;
    }
    input[type="text"]:hover{
        
        background-color: rgb(75, 71, 71);
    }
    input[type="text"]{
        width: 70%;
        height: 25px;
    }
    input[type="button"]:hover{
        
        background-color: rgb(107, 224, 60);
    }
    input[type="button"]{
        display: flex;
        margin-top: 20px;
        height: 35px;
        margin-left: 32%;
    }
    input[type="button"]:active{
        background-color: green;
    }
    /* input[type="text"]{
        
        text-align: center;
        
    } */
    /* input{
        /* width: 300px; */
        /* margin:auto;
    } */
    .form{
        border-style:solid;
        box-sizing: border-box;
       
        border-radius: 50px;
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
    .background{
        background:rgba(0,0,0,0.7)url('bg1.jpg');
        background-size: cover;
        background-blend-mode: darken;
    }
</style>
</html>


