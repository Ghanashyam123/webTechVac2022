<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up form</title>
</head>
<body>
    <h1><center>Register Form</center></h1>
    <fieldset>
        <legend>Personal Information: </legend> 
        <form action="process.php" method="POST">
            <label>username </label>
            <input type="text" name="username"><br><br>
            <label>Password : </label>
            <input type="password" name="password"><br><br>
            <label>email </label>
            <input type="email" name="email"><br><br>
            <input type="submit" name="register">
            <input type="reset">
        </form>
    </fieldset>
</body>
</html>