<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Department</title>
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
        <h2>Edit Department</h2>
    </center>
    <center>
        <?php
        foreach($dept as $row) {
        ?>
        <form name="EditDepartment" method="post" action="<?php echo base_url(); ?>department/edit">
            <table>
                <tr>
                    <td>dnumber</td>
                    <td><input type="text" name="dnumber" value="<?php echo $row['dnumber']; ?>"/></td>
                </tr>
                <tr>
                    <td>dname</td>
                    <td><input type="text" name="dname" value="<?php echo $row['dname']; ?>"/></td>
                </tr>
                <tr>
                    <td colspan=2>
                        <input type="submit" name="Edit" value="Edit" />
                        <input type="reset" name="Cancel" value="Cancel" />
                    </td>
                </tr>
            </table>
        </form>
        <?php
        }
        ?>
    </center>
</body>
</html>