<!DOCTYPE html>

<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <fieldset style="width: 330px">
            <legend><b>Login form</b></legend>
            <form method="POST" action="http://localhost/Php-training/connect.php"> 
               
                <table border="0">
                    <tr>
                        <td>Username: </td>
                        <td><input tyle="text" name="username"></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input tyle="password" name="password"></td>
                    </tr>
                    <tr>
                        <td><button type="submit" name="submit">Submit</button></td>
                    </tr>
                </table>
            </form>
        </fieldset> 
    </body>
</html>


