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

    <div class="container">
        <h1>Curriculam Gap System</h1>

        <form aciton="try2.php" name="myForm" onsubmit="return validateForm()" method="post">

            <div class="formdesign" id="txn_no">
                <div class="entry">
                    txn_no: <input type="text" name="txn_no"><b><span class="formerror"> </span></b>
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i><br>
                </div>

            </div>
             <div class="formdesign" id="course_code">
                <div class="entry">
                    course_code: <input type="text" name="course_code"><b><span class="formerror"> </span></b>
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i><br>
                </div>

            </div>
             <div class="formdesign" id="Guest_lecture">
                <div class="entry">
                    Guest_lecture: <input type="text" name="Guest_lecture"><b><span class="formerror">
                        </span></b>
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i><br>
                </div>

            </div>
            <div class="formdesign" id="guest_name">
                <div class="entry">
                    guest_name: <input type="text" name="guest_name"><b><span class="formerror"> </span></b>
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i><br>
                </div>

            </div>
            <div class="formdesign" id="guest_designation">
                <div class="entry">
                    guest_designation: <input type="text" name="guest_designation"><b><span class="formerror"> </span></b>
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i><br>
                </div>

            </div>
            <div class="formdesign" id="g_company_college">
                <div class="entry">
                    g_company_college: <input type="text" name="g_company_college"><b><span class="formerror"> </span></b>
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i><br>
                </div>

            </div>
            <div class="formdesign" id="lecture_date_and_time">
                <div class="entry">
                    lecture_date_and_time: <input type="text" name="lecture_date_and_time"><b><span class="formerror"> </span></b>
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i><br>
                </div>

            </div>
            <div class="formdesign" id="Nos">
                <div class="entry">
                    Nos: <input type="text" name="Nos"><b><span class="formerror"> </span></b>
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i><br>
                </div>

            </div>  


            <input class="but" type="submit" value="Submit">
            <p class="href"><a href="record1.php">Record</a></p>
        </form>
    </div>


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
            var txn_no = document.forms['myForm']["txn_no"].value;
            if (txn_no.length < 5) {
                seterror("txn_no", "*Length of txn_no is too short");
                returnval = false;
            }

            if (txn_no.length == 0) {
                seterror("txn_no", "*Length of txn_no cannot be zero!");
                returnval = false;
            }

            var course_code = document.forms['myForm']["course_code"].value;
            if (course_code.length < 5) {
                seterror("course_code", "*Length of course_code is too short");
                returnval = false;
            }

            if (course_code.length == 0) {
                seterror("course_code", "*Length of course_code cannot be zero!");
                returnval = false;
            }
            var Guest_lecture = document.forms['myForm']["Guest_lecture"].value;
            if (Guest_lecture.length < 5) {
                seterror("Guest_lecture", "*Length of Guest_lecture is too short");
                returnval = false;
            }

            if (Guest_lecture.length == 0) {
                seterror("Guest_lecture", "*Length of Guest_lecture cannot be zero!");
                returnval = false;
            }
            var guest_name = document.forms['myForm']["guest_name"].value;
            if (guest_name.length < 5) {
                seterror("guest_name", "*Length of guest_name is too short");
                returnval = false;
            }

            if (guest_name.length == 0) {
                seterror("guest_name", "*Length of guest_name cannot be zero!");
                returnval = false;
            }
            var guest_designation = document.forms['myForm']["guest_designation"].value;
            if (guest_designation.length < 5) {
                seterror("guest_designation", "*Length of guest_designation is too short");
                returnval = false;
            }

            if (guest_designation.length == 0) {
                seterror("guest_designation", "*Length of guest_designation cannot be zero!");
                returnval = false;
            }
            var g_company_college = document.forms['myForm']["g_company_college"].value;
            if (g_company_college.length < 5) {
                seterror("g_company_college", "*Length of g_company_college is too short");
                returnval = false;
            }

            if (g_company_college.length == 0) {
                seterror("g_company_college", "*Length of g_company_college cannot be zero!");
                returnval = false;
            }
            var lecture_date_and_time = document.forms['myForm']["lecture_date_and_time"].value;
            if (g_company_college.length < 5) {
                seterror("lecture_date_and_time", "*Length of lecture_date_and_time is too short");
                returnval = false;
            }

            if (lecture_date_and_time.length == 0) {
                seterror("lecture_date_and_time", "*Length of lecture_date_and_time cannot be zero!");
                returnval = false;
            }
            var Nos = document.forms['myForm']["Nos"].value;
            if (Nos.length < 5) {
                seterror("Nos", "*Length of Nos is too short");
                returnval = false;
            }

            if (Nos.length == 0) {
                seterror("Nos", "*Length of Nos cannot be zero!");
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
        background-color :white;
        color: #222;
        font-size: 24px;
        text-transform: uppercase;
        text-align: center;
        top:0px;
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