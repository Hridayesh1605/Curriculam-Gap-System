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
        // echo "ERROR: $sql <br> $con->error";

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
        integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ=="
        crossorigin="anonymous" />
</head>

<body>

    <div class="container">
        <h1>ENTRY FORM</h1>

        <form aciton="try.php" name="myForm" onsubmit="return validateForm()" method="post">

            <div class="formdesign" id="course_code">
                <div class="entry">
                    Course_code: <input type="text" name="course_code"><b><span class="formerror"> </span></b>
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i><br>
                </div>

            </div>
            <div class="formdesign" id="course_name">
                <div class="entry">
                    Course_name: <input type="text" name="course_name"><b><span class="formerror"> </span></b>
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i><br>
                </div>

            </div>
            <div class="formdesign" id="Prerequitists_entry">
                <div class="entry">
                    Prerequitists_entry: <input type="text" name="Prerequitists_entry"><b><span class="formerror">
                        </span></b>
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i><br>
                </div>

            </div>
            <div class="formdesign" id="SEM_Year">
                <div class="entry">
                    SEM/Year: <input type="text" name="SEM_Year"><b><span class="formerror"> </span></b>
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i><br>
                </div>

            </div>
            <div class="formdesign" id="Department">
                <div class="entry">
                    Department: <input type="text" name="Department"><b><span class="formerror"> </span></b>
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i><br>
                </div>

            </div>
            <div class="formdesign" id="CAY">
                <div class="entry">
                    CAY: <input type="text" name="CAY"><b><span class="formerror"> </span></b>
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i><br>
                </div>

            </div>


            <input class="but" type="submit" value="Submit">
            <p class="href"><a href="form2.php">next</a></p>
    </div>

    </form>
    <script>

        function clearErrors() {

            errors = document.getElementsByClassName('formerror');
            for (let item of errors) {
                item.innerHTML = "";
            }


        }
        function seterror(id, error) {
            //sets error inside tag of id 
            element = document.getElementById(id);
            element.getElementsByClassName('formerror')[0].innerHTML = error;

        }

        function validateForm() {
            var returnval = true;
            clearErrors();

            //perform validation and if validation fails, set the value of returnval to false
            var course_code = document.forms['myForm']["course_code"].value;
            if (course_code.length < 5) {
                seterror("course_code", "*Length of course_code is too short");
                returnval = false;
            }

            if (course_code.length == 0) {
                seterror("course_code", "*Length of course_code cannot be zero!");
                returnval = false;
            }

            var course_name = document.forms['myForm']["course_name"].value;
            if (course_name.length < 5) {
                seterror("course_name", "*Length of course_name is too short");
                returnval = false;
            }

            if (course_name.length == 0) {
                seterror("course_name", "*Length of course_name cannot be zero!");
                returnval = false;
            }
            var Prerequitists_entry = document.forms['myForm']["Prerequitists_entry"].value;
            if (Prerequitists_entry.length < 5) {
                seterror("Prerequitists_entry", "*Length of course_name is too short");
                returnval = false;
            }

            if (Prerequitists_entry.length == 0) {
                seterror("Prerequitists_entry", "*Length of Prerequitists_entry cannot be zero!");
                returnval = false;
            }
            var SEM_Year = document.forms['myForm']["SEM_Year"].value;
            if (SEM_Year.length < 5) {
                seterror("SEM_Year", "*Length of SEM_Year is too short");
                returnval = false;
            }

            if (SEM_Year.length == 0) {
                seterror("SEM_Year", "*Length of SEM_Year cannot be zero!");
                returnval = false;
            }
            var Department = document.forms['myForm']["Department"].value;
            if (Department.length < 5) {
                seterror("Department", "*Length of Department is too short");
                returnval = false;
            }

            if (Department.length == 0) {
                seterror("Department", "*Length of Department cannot be zero!");
                returnval = false;
            }
            var CAY = document.forms['myForm']["CAY"].value;
            if (CAY.length < 5) {
                seterror("CAY", "*Length of CAY is too short");
                returnval = false;
            }

            if (Department.length == 0) {
                seterror("CAY", "*Length of CAY cannot be zero!");
                returnval = false;
            }

            return returnval;
        }
    </script>


</body>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .container h1 {
        display: flex;
        justify-content: center;
        margin-top: 18px;
        margin-bottom: 18px;

    }

    .container h1 {
        font-size: 25px;
    }

    :root {
        --lg-lightcolor: linear-gradient(to left, rgba(116, 235, 213, 0.6), rgba(159, 172, 230, 0));
    }

    body {
        background: var(--lg-lightcolor), url('bg1.jpg') no-repeat center center fixed;
        background-size: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        width: 100vw;
    }

    .container {
        background-color: rgba(80, 77, 77, 0.7);
        border-radius: 10px;
        -webkit-border-radius: 10px;
        box-shadow: 0 2.8px 2.2px rgba(0, 0, 0, 0.034), 0 6.7px 5.3px rgba(0, 0, 0, 0.048), 0 12.5px 2.5px;
        overflow: hidden;
        width: calc(100vw - 65vw);
        max-width: 100%;
    }

    .formdesign {
        /* background: rgb(186, 230, 84); */
        /* padding: 30px 0; */
        padding-left: 30px;
        padding-right: 30px;
        /* padding-bottom: 1px; */
    }

    .container h1 {
        background-color="white";
        color: #222;
        font-size: 24px;
        text-transform: uppercase;
        text-align: center;
    }

    .form {
        padding: 20px;
    }

    .entry {
        /* margin-bottom: 1px; */
        position: relative;
        font-size: 25px;
    }

    .entry label {
        display: inline-block;
        margin-bottom: 5px;
    }

    .entry input {
        width: 100%;
        border: 2px solid #f0f0f0;
        display: block;
        font-size: 18px;
        padding: 4px;

    }

    .entry input:focus {
        outline: 0;
        border-color: #777;
    }

    .control.successMsg input {
        background-color: green;
    }

    .control.errorMsg input {
        background-color: rgb(255, 21, 5);
    }

    .entry i {
        position: absolute;
        right: 8%;
        top: 38px;
        visibility: hidden;
    }


    .control.successMsg i.fa-check-circle {
        color: green;
        visibility: visible;
    }

    .control.errorMsg i.fa-exclamation-circle {
        color: rgb(255, 21, 5);
        visibility: visible;
    }

    .btn {
        background: #000;
        border-radius: 6px;
        border: none;
        outline: none;
        color: white;
        display: block;
        font-size: 16px;
        padding: 15px 0;
        margin-top: 20px;
        width: 100%;
        font-weight: bold;
        text-transform: uppercase;
        transform: all 1s ease;
    }

    .btn:hover {
        color: red;
    }

    input [type="submit"] {
        display: flex;
        justify-content: center;
    }

    .but {
        display: flex;
        justify-content: center;
        color: white;
        background-color: green;
        font-size: 20px;
        margin: auto;
        margin-bottom: 24px;
        padding: 3px;

    }

    input[type="submit"]:hover {
        color: black;
    }

    input[type="text"]:hover {
        background-color: rgb(148, 143, 143);
    }


    @media(max-width:998px) {
        .container {
            width: calc(100vw - 35vw);
            max-width: 100%;
        }
    }
</style>

</html>


