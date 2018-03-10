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
        <h2>Edit Employee</h2>
        <form name="EditEmployee" method="post" action="<?php echo base_url(); ?>employee/edit">
        <?php
        foreach($emp as $row)
        {
        ?>
            <table>
                <tr>
                    <td>ssn</td>
                    <td><input type="text" name="ssn" value="<?php echo $row['ssn']; ?>" /></td>
                </tr>
                <tr>
                    <td>name</td>
                    <td><input type="text" name="name" value="<?php echo $row['name']; ?>"/></td>
                </tr>
                <tr>
                    <td>dno</td>
                    <td>
                        <select name="dno">
                            <option value="<?php echo $row['dno']; ?>"><?php echo $row['dno']; ?></option>
                            <?php
                                foreach($dept as $row)
                                {
                            ?>
                            <option value="<?php echo $row['dnumber']; ?>"><?php echo $row['dnumber']; ?></option>
                            <?php
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan=2>
                        <input type="submit" name="Edit" value="Edit" />
                        <input type="reset" name="Cancel" value="Cancel" />
                    </td>
                </tr>
            </table>
            <?php
            }
            ?>
        </form>

    </center>
</body>
</html>