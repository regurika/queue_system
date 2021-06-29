<?php

include_once("connections/connections.php");

$con = connection();

$sql = "SELECT * FROM queue_list ORDER BY id DESC";
$queues = $con->query($sql) or die ($con->error);
$row = $queues->fetch_assoc();


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
    <h1>Queue List</h1>
    <br/>
    <br/>
    <a href="add.php">Add New Entry</a>
    <table>
        <thead>
        <tr>
            <th> First Name </th>
            <th> Last Name </th>
            <th> College </th>
            <th> Transaction </th>

        </tr>
        </thead>
        <tbody>
        <?php do{ ?>
        <tr> 
            <td><?php echo $row['first_name']; ?></td>
            <td><?php echo $row['last_name']; ?></td>
            <td><?php echo $row['college']; ?></td>
            <td><?php echo $row['transaction']; ?></td>
            
        </tr>
        <?php }while($row = $queues->fetch_assoc()) ?>

        </tbody>
    </table>

</body>
</html> 