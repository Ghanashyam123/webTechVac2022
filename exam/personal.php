<?php
  echo md5("Ghanashyam");
  
?>

<!DOCTYPE html>
<html lang="us">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Registration Form</title>
</head>
<body>
        <fieldset style="width: 500px;">
            <legend>Personal</legend>
            <form>
                <label>Salutation: </label>
                <select name="salutation">
                    <option>None</option>
                    <option>Mr.</option>
                    <option>Mrs.</option>
                </select>
                <br><br>
                <label>First Name: </label>
                <input type="text" name="fname" />
                <br><br>
                <label>Last Name: </label>
                <input type="text" name="lname" />
                <br><br>
                <label>Gender</label>
                <input type="radio" name="gender" value="Male">
                Male <input type="radio" name="gender" value="Female"> Female
                <br><br>
                <label>Email: </label>
                <input type="email" name="email" />
                <br><br>
                <label>Date of birth </label>
                <input type="date" name="date" pattern="(0[1-9]|1[0-2])/(0[1-9]|1[0-9]|2[0-9]|3[0-1])/\d{4}"/>
                <br><br>
                <label>Address</label>
                <textarea name="address"> </textarea><br><br>
             <input type="submit" name="submit" value="createNew"/>
            </form>
        </fieldset>
    
</body>
</html>