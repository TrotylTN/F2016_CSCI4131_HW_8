<?php
      $db_servername = 'egon.cs.umn.edu';
      $db_port = 3307;
      $db_name = 'C4131F16U128';  //Note xxx is a number, you can find it on moodle
      $db_username = 'C4131F16U128';
      $db_password = 18606;  // This should be on moodle as well.
?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>
            Login Page
        </title>
        <link rel="stylesheet" type="text/css" href="./style.css">
    </head>

    <body>
        <h2 class="tntitle"> Login Page </h2>
        <p> </p>
        <table class="warn"> <tr class="warn"> <td class="warn">
        <?php
            echo "Please enter a valid value for the User Login field.<br>";
            echo "Please enter a valid value for the Password field.<br>";
            echo "Password is incorrect. Please check the password and try again";
        ?>
        </td> </tr> </table>

        <p> </p>
        <table class="login">
            <tr class="login">
                <td class="login" style="width: 600px">
                    <p>Please enter your user's login name and password. Both values are case sensitive.</p>
                </td>
            </tr>
        </table>
        <table class="login">
            <tr class="login">
                <td class="login">
                    <p> Login: </p>
                </td>
                <td class="login" style="text-align: left">
                    <p> <input type="text" name="login"> </p>
            </tr>
            <tr class="login">
                <td class="login">
                    <p> Password: </p>
                </td>
                <td class="login" style="text-align: left">
                    <p> <input type="password" name="password"> </p>
                </td>
            </tr>
        </table>
        <table class="login">
            <tr class="login">
                <td class="login" style="width: 600px">
                    <p> <button type="submit" name="submit" value="confirm"> Submit </button> </p>
                </td>
            </tr>
        </table>        
    </body>
</html>