<?php
include "../Controller/LoginValidation.php"
?>

<!DOCTYPE html>
<html>
<head>
    <title> Login Page </title>

    <script>
        function collect_data()
        {
            let name=document.getElementById("username").value.trim();
            let email=document.getElementById("email").value.trim();
            let gender=document.querySelector('input'[name="gender"]:'checked');

            let valid=true;
            let message="";

            if(name.length<5)
            {
                message+="Name must be 5 char";
                valid=false;
            }

            if(email=="")
            {
                message+="Email must be required";
                valid=false;
            }

            if(gender==null)
            {
                message+="Select a gender";
                valid=false;
            }

            if(!valid)
            {
                alert(message);
            }

            return valid;


        }
    </script>


</head>

<body>
    <form method="post" action="" onsubmit="return collect_data"></form>

    <table>
        <tr>
            <td><label for="username"> Name: </label></td>
            <td><input type="text" id="usename" name="username"></td>
        </tr>

        <tr>
            <td><label for="email"> Email: </label></td>
            <td><input type="email" id="email" name="email"></td>
        </tr>

        <tr>
            <tr>
    <td>
        <label>Gender:</label>
    </td>

    <td>
        <input type="checkbox" id="male" name="gender" value="Male" <?php echo $gender == "Male" ? "checked" : ""; ?>>
        <label for="male">Male</label>

        <input type="checkbox" id="female" name="gender" value="Female" <?php echo $gender == "Female" ? "checked" : ""; ?>>
        <label for="female">Female</label>
    </td>
</tr>
        </tr>

        <tr>

    <td colspan="2">

        <input
            type="submit"
            id="submit"
            name="submit"
            value="LogIn"
        >

        <input
            type="reset"
            id="reset"
            name="reset"
            value="Reset"
        >

    </td>

</tr>


    </table>


</body>

</html>