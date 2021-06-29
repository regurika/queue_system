<?php

include_once("connections/connections.php"); 

$con = connection();

if(isset($_POST['submit'])){

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $college = $_POST['college'];
    $transaction = $_POST['transaction'];
   
   
 $sql = "INSERT INTO `queue_list`(`first_name`, `last_name`, `college`,`transaction`)
 VALUES ('$firstname','$lastname','$college','$transaction')";

    $con->query($sql) or die($con->error);

    echo header("Location: index.php");

}


?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Queue Management System</title>
    <link rel="stylesheet" href="css/style.css">


</head>
<body>

<form action= "" method= "post">

    <label>First Name:<label>
    <input type= "text" name="firstname" id="firstname"><br><br>

    <label>Last Name:<label>
    <input type= "text" name="lastname" id="lastname"><br><br>

    <label>ID Number:</label>
    <input type="tel" id="idnum" name="idnumber" placeholder="0000-9999" pattern="[0000-9999]{4}-[0000-9999]{4}"><br><br>

    <label>College:<label>
    <select name="college" id="college">
        <option value="COLLEGE OF ENGINEERING">COLLEGE OF ENGINEERING</option>
        <option value="COLLEGE OF FISHIRIES">COLLEGE OF FISHIRIES</option>
        <option value="COLLEGE OF SOCIAL SCIENCES AND HUMANITIES">COLLEGE OF SOCIAL SCIENCES AND HUMANITIES</option>
        <option value="COLLEGE OF BUSINESS ADMINISTRATION AND ACCOUNTANCY">COLLEGE OF BUSINESS ADMINISTRATION AND ACCOUNTANCY</option>
        <option value="COLLEGE OF EDUCATION">COLLEGE OF EDUCATION</option>
        <option value="COLLEGE OF NATURAL SCIENCES AND MATHEMATICS">COLLEGE OF NATURAL SCIENCES AND MATHEMATICS</option>
        <option value="COLLEGE OF AGRICULTURE">COLLEGE OF AGRICULTURE</option>
</select> <br><br>

    <label>Transaction:<label>
        <select name="transaction" id="transaction">
            <option value="COR">COR</option>
            <option value="TOR">TOR</option>
            <option value="Copy of grades">Copy of grades</option>

</select> <br><br>  

    <input type="submit" name="submit" value="Submit Form">

</form>

</body>
</html> 