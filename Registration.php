<?php
if (isset($_POST['register'])) {
    include 'phpCode/phpReg.php';
}
?>

<html>
<head>
</head>
<body>
<fieldset>
    <legend>
        <h1>Registration</h1>
    </legend>
    <form action="" method="post">
        <table>
            <tr>
                <td align="right">
                    Username:</td>
                <td><input type="text" name="username">
                    <?php
                    echo $err_username;
                    ?>
                </td>
            </tr>
            <tr>
                <td align="right">Password:</td>
                <td><input type="password" name="pass">
                    <?php
                    echo $err_pass;
                    ?>
                </td>
            </tr>
            <tr>
                <td align="right">
                    Confirm Password:</td>
                <td><input type="password" name="conf_pass">
                    <?php
                    echo $err_confPass;
                    ?>
                </td>
            </tr>

            <tr>
                <td>Type:</td>
                <td>
                    <input type="text" name="type" >
                    <?php
                    echo $err_type;
                    ?>
                </td>
            </tr>

            <tr align="center">
                <td colspan="2"><input type="submit" value="register" name="register"></td>
            </tr>

        </table>
    </form>
</fieldset>
</body>
</html>