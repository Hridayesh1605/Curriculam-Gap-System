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
    header('location:EntryForm.php');
    
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
            <form id="myform" aciton="firstform.php" name="myForm" onsubmit="return validateForm()" method="post">
                
                    <div class="entry">
                    <p id="Department">
                    <label>Department</label>
                    <select id="slct1" name="Department" onchange="populate(this.id,'slct2')">
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
                <p id="SEM_Year">
                    <label>SEM_Year</label>
                    <select id="slct3" name="SEM_Year" onchange="pop(this.id,'slct2')">
                        <option disabled selected>SEM/YEAR</option>
                        <option value=""></option>
                        <option value="FE">FE</option>
                        <option value="SE">SE</option>
                        <option value="TE">TE</option>
                        <option value="BE">BE</option>
                    </select>
                    <b><span class="formerror"></span></b>

                </p>
                <p id="course_code">
                    <label>course_code</label>
                    <input type="text" name="course_code" placeholder="COURSE_CODE" autocomplete="off"><br>
                    <b><span class="formerror"></span></b>
                </p>
                <p id="course_name">
                    <label>course_name</label>
                    <select id="slct2" name="course_name"></select>
                        
                    <b><span class="formerror"></span></b>
                </p>
                
                
                <p id="CAY">
                    <label>CAY</label>
                    <input type="text" name="CAY" placeholder="Current Academic Year" autocomplete="off"><br>
                    <b><span class="formerror"></span></b>

                </p>
                <p id="Prerequitists_entry">
                    <label>Prerequitists_entry</label>
                    <textarea name="Prerequitists_entry" rows="5" cols="40" placeholder="Prerequisit Entry"></textarea>
                    <b><span class="formerror"></span></b>

                </p>
                <input class="but" type="submit" value="Submit" method="post">
                
                
            </div>
                <div class="full">
                
                
            

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
        function populate(s1,s2){
            var s1 = document.getElementById(s1);
            var s2 = document.getElementById(s2);
            
            s2.innerHTML = "";
            if(s1.value=="Mechanical Engineering" ){
            var optionArray = ["|","Applied Mathematics III|Applied Mathematics III",
                "Thermodynamics|Thermodynamics",
                "Strength of Materials|Strength of Materials",
                "Production Process I|Production Process I",
                "Material Technology|Material Technology",
                "Computer Aided Machine Drawing|Computer Aided Machine Drawing",
                "Strength of Material*|Strength of Material*",
                "Material Technology|Material Technology",
                "Machine Shop Practice I|Machine Shop Practice I",
                "Applied Mathematics IV|Applied Mathematics IV",
                "Fluid Mechanics|Fluid Mechanics",
                "Industrial Electronics|Industrial Electronics",
                "Production Process II|Production Process II",
                "Kinematics of Machinery|Kinematics of Machinery",
                "Data Base and Information Retrieval|Data Base and Information Retrieval",
                "Fluid Mechanics|Fluid Mechanics",
                "Industrial Electronics|Industrial Electronics",
                "Kinematics of Machinery|Kinematics of Machinery",
                "Machine Shop Practice II|Machine Shop Practice II",
                "Internal Combustion Engines|Internal Combustion Engines",
                "Mechanical Measurements and Control|Mechanical Measurements and Control",
                "Heat Transfer|Heat Transfer",
                "Dynamics of Machinery|Dynamics of Machinery",
                "Department Level Optional Course I |Department Level Optional Course I ",
                "Manufacturing Sciences Lab|Manufacturing Sciences Lab",
                "Business Communication and Ethics|Business Communication and Ethics",
                "Metrology and Quality engineering |Metrology and Quality engineering ",
                "Machine Design I |Machine Design I ",
                "Finite Element analysis|Finite Element analysis",
                "Refrigeration and Air Conditioning |Refrigeration and Air Conditioning ",
                "Department Level Optional Course II |Department Level Optional Course II ",
                "Mechatronics Lab |Mechatronics Lab ",
                "Thermodynamics|Thermodynamics",
                "Thermodynamics|Thermodynamics"];
        }

            
            else if(s1.value=="Information Technology"){
                var optionArray = ["|","Engineering Mathematics-III|Engineering Mathematics-III",
                "Data Structure and Analysis|Data Structure and Analysis",
                "Database Management System|Database Management System",
                "Principle of Communication|Principle of Communication",
                "Paradigms and Computer Programming Fundamentals|Paradigms and Computer Programming Fundamentals",
                "Data Structure Lab |Data Structure Lab ",
                "SQL Lab |SQL Lab ",
                "Computer programming Paradigms Lab|Computer programming Paradigms Lab",
                "Java Lab (SBL)|Java Lab (SBL)",
                "Engineering Mathematics-IV|Engineering Mathematics-IV",
                "Computer Network and Network Design|Computer Network and Network Design",
                "Operating System|Operating System",
                "Automata Theory|Automata Theory",
                "Computer Organization and Architecture|Computer Organization and Architecture",
                "Network Lab |Network Lab ",
                "Unix Lab |Unix Lab ",
                "Microprocessor Lab |Microprocessor Lab ",
                "Python Lab (SBL) |Python Lab (SBL) ",
                "Microcontroller and Embedded Programming|Microcontroller and Embedded Programming",
                "Internet Programming|Internet Programming",
                "Advanced Data Management Technology|Advanced Data Management Technology",
                "Cryptography & Network Security |Cryptography & Network Security ",
                "Department Level Optional Course-I|Department Level Optional Course-I",
                "Internet Programming Lab|Internet Programming Lab",
                "Security Lab|Security Lab",
                "OLAP Lab |OLAP Lab ",
                "IOT (Mini Project) Lab |IOT (Mini Project) Lab ",
                "Business Communication and Ethics |Business Communication and Ethics ",
                "Software Engineering with Project Management|Software Engineering with Project Management",
                "Data Mining and Business Intelligence|Data Mining and Business Intelligence",
                "Cloud Computing & Services|Cloud Computing & Services",
                "Wireless Networks|Wireless Networks",
                "Department Level Optional Course -II|Department Level Optional Course -II",
                "Software Design Lab|Software Design Lab",
                "Business Intelligence Lab|Business Intelligence Lab",
                "Cloud Service Design Lab|Cloud Service Design Lab",
                "Sensor Network Lab |Sensor Network Lab ",
                "Enterprise Network Design|Enterprise Network Design",
                "Infrastructure Security|Infrastructure Security",
                "Artificial Intelligence|Artificial Intelligence",
                "Department Level Optional Course -III|Department Level Optional Course -III",
                "Network Design Lab|Network Design Lab",
                "Advanced Security Lab|Advanced Security Lab",
                "Intelligence System Lab|Intelligence System Lab",
                "Android Apps Development Lab |Android Apps Development Lab "];

            }
           for(var option in optionArray){
		var pair = optionArray[option].split("|");
		var newOption = document.createElement("option");
		newOption.value = pair[0];
		newOption.innerHTML = pair[1];
		s2.options.add(newOption);
           }
        }

    

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

            var course_code = document.forms['myForm']["course_code"].value;
            if (course_code.length < 6) {
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
            if (Prerequitists_entry.length < 25) {
                seterror("Prerequitists_entry", "*Length of course_name is too short");
                returnval = false;
            }

            if (Prerequitists_entry.length == 0) {
                seterror("Prerequitists_entry", "*Length of Prerequitists_entry cannot be zero!");
                returnval = false;
            }
            var SEM_Year = document.forms['myForm']["SEM_Year"].value;
            if (SEM_Year.length < 2) {
                seterror("SEM_Year", "*Length of SEM_Year is too short");
                returnval = false;
            }

            if (SEM_Year.length == 0) {
                seterror("SEM_Year", "*Length of SEM_Year cannot be zero!");
                returnval = false;
            }
            var Department = document.forms['myForm']["Department"].value;
            if (Department.length < 2) {
                seterror("Department", "*Length of Department is too short");
                returnval = false;
            }

            if (Department.length == 0) {
                seterror("Department", "*Length of Department cannot be zero!");
                returnval = false;
            }
            var CAY = document.forms['myForm']["CAY"].value;
            if (CAY.length < 4) {
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
#course_name input{
    font-size: 50px;
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
    grid-template-columns:2fr 2fr;
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