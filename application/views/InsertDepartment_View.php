<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert Department</title>
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
        <h2>Insert Department</h2>
    </center>
    <center>
        <form name="InsertDepartment" method="post" action="<?php echo base_url(); ?>department/insert">
            <table>
                <tr>
                    <td>dnumber</td>
                    <td><input type="text" name="dnumber" required /></td>
                </tr>
                <tr>
                    <td>dname</td>
                    <td><input type="text" name="dname" required /></td>
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