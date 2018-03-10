<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert Employee</title>
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
        <h2>Insert Employee</h2>
        <form name="InsertEmployee" method="post" action="<?php echo base_url(); ?>employee/insert">
            <table>
                <tr>
                    <td>ssn</td>
                    <td><input type="text" name="ssn" required /></td>
                </tr>
                <tr>
                    <td>name</td>
                    <td><input type="text" name="name" required /></td>
                </tr>
                <tr>
                    <td>dno</td>
                    <td>
                        <select name="dno">
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
                        <input type="submit" name="Insert" value="Insert" />
                        <input type="reset" name="Cancel" value="Cancel" />
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>