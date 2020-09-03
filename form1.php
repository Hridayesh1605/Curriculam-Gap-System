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
<div class="full">
    <div class="heading"><p>Curriculam Gap System</p></div>
    <div class="entry">
        <h1>Entry form</h1>
    </div>
    <!-- if($insert == true){
        echo "<p class='submitMsg'>Thanks for submitting your form. We are happy to see you joining us for the US trip</p>";
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
    <p><a href="form2.php">next</a></p>
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
        height: 100%;
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
    

</style>
</html>


