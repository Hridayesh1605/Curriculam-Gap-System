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
    // $Guest_lecture= $_POST['Guest_lecture'];
    $guest_name= $_POST['guest_name'];
    $guest_designation= $_POST['guest_designation'];
    $g_company_college= $_POST['g_company_college'];
    $lecture_date_and_time= $_POST['lecture_date_and_time'];
    $Nos= $_POST['Nos'];
    $Department= $_POST['Department'];
    $sql = "INSERT INTO `e_form`.`entry2` (`txn_no`, `course_code`, `guest_name`, `guest_designation`, `g_company_college`, `lecture_date_and_time`, `Nos`,`Department`) VALUES ('$txn_no', '$course_code', '$guest_name', '$guest_designation', '$g_company_college', '$lecture_date_and_time', '$Nos','$Department');";
    // echo $sql;
    if($con->query($sql) == true){
        // echo "succesfully inserted";
    }
    else{
        // echo "ERROR: $sql <br> $con->error";

    }
    header('location:firstform.php');
    $con->close();
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entry Form</title>
</head>
<body>
    <div class="container">
        <h1 class="brand">Entry form</h1>
        <div class="wrapper">
        <div class="contact">
            <form id="myform" action="EntryForm.php" name="myForm" onsubmit="return validateForm()" method="post">
                <div class="simple">
                <p>
                    <p>Guest_lecture</p>
                    <label>YES</label>
                    <input type="radio" name="Guest_lecture" value="yes" onclick="return clicked();">
                    <label>NO</label>
                    <input type="radio" name="Guest_lecture" value="no" onclick="return clicked();">
                </p>
                </div>
                <div class="hidden">
                <p id="Department">
                        <label>Department</label>
                        <select id="slct1" name="Department" >
                            <option disabled selected>Department Name</option>
                            <option value=""></option>
                            <option value="Mechanical Engineering">Mechanical Engineering</option>
                            <option value="Electronics and Telecommunication Engineering">Electronics and Telecommunication Engineering</option>
                            <option value="Instrumentation Engineering">Instrumentation Engineering</option>
                            <option value="Computer Engineering">Computer Engineering</option>
                            <option value="Information Technology">Information Technology</option>
                            <option value="Civil Engineering">Civil Engineering</option>
                            <option value="Applied Science and Humanities">Applied Science and Humanities</option>
    
                        </select>
                        <b><span class="formerror"></span></b>
    
                    </p>
                <p id="txn_no">
                    <label>txn_no</label>
                    <input type="text" name="txn_no" placeholder="transaction No." autocomplete="off"><br>
                    <b><span class="formerror"></span></b>
                </p>
                <p id="course_code">
                    <label>course_code</label>
                    <input type="text" name="course_code"  placeholder="Course_code" autocomplete="off"><br>
                    <b><span class="formerror"></span></b>
                </p>
                <p id="guest_name">
                    <label>guest_name</label>
                    <input type="text" name="guest_name"  placeholder="guest_name" autocomplete="off"><br>
                    <b><span class="formerror"></span></b>

                </p>
                <p id="guest_designation">
                    <label>guest_designation</label>
                    <input type="text" name="guest_designation"  placeholder="guest_designation" autocomplete="off"><br>
                    <b><span class="formerror"></span></b>

                </p>
                <p id="g_company_college">
                    <label>g_company_college</label>
                    <input type="text" name="g_company_college"  placeholder="g_company_college" autocomplete="off"><br>
                    <b><span class="formerror"></span></b>

                </p>
                <p id="lecture_date_and_time">
                    <label>lecture_date_and_time</label>
                    <input type="date" name="lecture_date_and_time"  placeholder="MM/DD/YYYY" autocomplete="off"><br>
                    <b><span class="formerror"></span></b>

                </p>
                <p id="Nos">
                    <label>Nos</label>
                    <input type="text" name="Nos"  placeholder="Number of student" autocomplete="off"><br>
                    <b><span class="formerror"></span></b>

                </p>
            </div>
                <div class="full">
                <input class="but" type="submit" value="Submit">

            </div>
            </form>
        </div>
        <div class="company-info">
            <h3>vcet</h3>
            <ul>
                <li>K.T. Marg, Vartak College Campus, Vasai Road (W), Dist-Palghar, Vasai, Maharashtra 401202</li>
                <li>0250 233 8234 </li>
                <li>email</li>
            </ul>
        </div>
        </div>
    </div>

<script>

function clearErrors() {

errors = document.getElementsByClassName('formerror');
for (let item of errors) {
    item.innerHTML = "";
}


}
function seterror(id, error) { 
element = document.getElementById(id);
element.getElementsByClassName('formerror')[0].innerHTML = error;

}
function validateForm() {
            var returnval = true;
            clearErrors();
            var Department = document.forms['myForm']["Department"].value;
            if (Department.length < 2) {
                seterror("Department", "*Length of Department is too short");
                returnval = false;
            }

            if (Department.length == 0) {
                seterror("Department", "*Length of Department cannot be zero!");
                returnval = false;
            }

            
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
            if (lecture_date_and_time.length < 5) {
                seterror("lecture_date_and_time", "*Length is too short");
                returnval = false;
            }

            if (lecture_date_and_time.length == 0) {
                seterror("lecture_date_and_time", "*Length of lecture_date_and_time cannot be zero!");
                returnval = false;
            }
            var Nos = document.forms['myForm']["Nos"].value;
            if (Nos.length < 2) {
                seterror("Nos", "*Length is too short");
                returnval = false;
            }

            if (Nos.length == 0) {
                seterror("Nos", "*Length of Nos cannot be zero!");
                returnval = false;
            }
            return returnval;
        }
        function clicked() {
var a = document.getElementsByName("Guest_lecture");
if (a[0].checked == true) {
    let ec = document.getElementsByClassName("hidden");
    ec[0].style.visibility = "visible";
}
else if (a[1].checked == true) {
    let ec = document.getElementsByClassName("hidden");
    ec[0].style.visibility = "hidden";
    ;
}
return true;

}

</script>
</body>
<style>
*{
    box-sizing: border-box;
}
:root {
    --lg-lightcolor: linear-gradient(to left, rgba(116, 235, 213, 0.6), rgba(159, 172, 230, 0));
}
body{
    /* background: var(--lg-lightcolor), url('bg1.jpg') no-repeat center center fixed; */
    color: #083a6b;
    line-height: 1.6;
    padding:1em;
}

.container{
    max-width: 1170px;
    margin-left: auto;
    margin-right: auto;
    padding:1em;
}
ul{
    list-style: none;
    padding:0;
}

.brand{
    text-align:center;
}
.wrapper{
    box-shadow: 0 0 20px 0 rgba(72,94,116,0.7);
}
.wrapper > *{
    padding: 1em;

}
.company-info{
    background:#c9e6ff;
}
.company-info h3,.company-info ul{
    text-align: center;

}
.contact{
    background: #f9feff;
}

.contact form{
    display: grid;
    grid-template-columns:1fr 1fr;
    grid-gap: 20px;

}

.contact form label{
    display:block;
}
.contact form .full{
    grid-column: 1/3;;
}
.contact form button,.contact form button{
    width:100%;
    padding:1em;
}
.contact form button{
    background:#c9e6ff;
    border:0;
    text-transform: uppercase;
}
.formerror{
    color:rgb(228, 20, 20);
    font-size: 15px;
}
.hidden{
    visibility:hidden;
}
.contact form button:hover,.contact form button:focus{
    background: #083a6b;
    outline: 0;
    transition:background-color 2s ease-out;
}
@media(min-width:700px){
    .wrapper{
        display:grid;
        grid-template-columns: 2fr 1fr;
    }
    .wrapper >*{
        padding:2em;
    }

}
</style>

</html>