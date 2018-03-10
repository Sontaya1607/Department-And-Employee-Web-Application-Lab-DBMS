<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>58160434 DBMS Lab2</title>
<style>
table, th, td {
    border: 2px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: center;
    background-color: #ffb3b3;
}
</style>
</head>
<body bgcolor="#DAF7A6">
    <center>
        <h3>Department</h3>
        <a href ="<?php echo base_url(); ?>department/insert"><h4>Insert Department</h4></a>
        <table>
            <tr>
                <th>dnumber</th>
                <th>dname</th>
                <th colspan=2>operation</th>
            </tr>
            <?php
            foreach($dept as $row) {
            ?>
            <tr>
                <td><?php echo $row['dnumber']; ?></td>
                <td><?php echo $row['dname']; ?></td>
                <td><a href="<?php echo base_url(); ?>department/edit/<?php echo $row['dnumber']; ?>">Edit</a></td>
                <td><a href="<?php echo base_url(); ?>department/delete/<?php echo $row['dnumber']; ?>" onclick="return confirm('Are you sure want to delete ?')">Delete</a></td>
            </tr>
            <?php
            }
            ?>
        </table>
        <br>
        <h3>Employee</h3>
        <a href ="<?php echo base_url(); ?>employee/insert"><h4>Insert Employee</h4></a>
        <table>
            <tr>
                <th>ssn</th>
                <th>name</th>
                <th>dno</th>
                <th colspan=2>operation</th>
            </tr>
            <?php
            foreach($emp as $row) {
            ?>
            <tr>
                <td><?php echo $row['ssn']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['dno']; ?></td>
                <td><a href="<?php echo base_url(); ?>employee/edit/<?php echo $row['ssn']; ?>">Edit</a></td>
                <td><a href="<?php echo base_url(); ?>employee/delete/<?php echo $row['ssn']; ?>" onclick="return confirm('Are you sure want to delete ?')">Delete</a></td>
            </tr>
            <?php } ?>
        </table>
    </center>
</body>
</html>