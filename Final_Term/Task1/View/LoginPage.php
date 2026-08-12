<?php
 
// Controller include
include "../Controller/LoginValidation.php";
 
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>PHP Form Validation Example</title>

    <script>

        function validateForm()
        {
            var name = document.getElementById("name").value.trim();

            var email = document.getElementById("email").value.trim();

            var website = document.getElementById("website").value.trim();

            var comment = document.getElementById("comment").value.trim();

            var gender = document.querySelector(
                'input[name="gender"]:checked'
            );

            var errors = "";


            // Name validation
            if (name == "")
            {
                errors += "Name is required.\n";
            }
            else if (name.length < 5)
            {
                errors += "Name must be at least 5 characters.\n";
            }


            // Email validation
            if (email == "")
            {
                errors += "E-mail is required.\n";
            }
            else
            {
                var emailPattern =
                    /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

                if (!emailPattern.test(email))
                {
                    errors += "Please enter a valid E-mail.\n";
                }
            }


            // Website validation
            if (website == "")
            {
                errors += "Website is required.\n";
            }


            // Comment validation
            if (comment == "")
            {
                errors += "Comment is required.\n";
            }


            // Gender validation
            if (gender == null)
            {
                errors += "Please select your gender.\n";
            }


            // Show all errors together
            if (errors != "")
            {
                alert(errors);
                return false;
            }

            return true;
        }

    </script>

</head>


<body>

    <h2>PHP Form Validation Example</h2>


    <form
        action="LoginValidation.php"
        method="POST"
        onsubmit="return validateForm()"
    >

        <table>

            <!-- Name -->
            <tr>

                <td>
                    <label for="name">
                        Name:
                    </label>
                </td>

                <td>
                    <input
                        type="text"
                        id="name"
                        name="name"
                        placeholder="Enter Your Name"
                    >
                </td>

            </tr>


            <!-- Email -->
            <tr>

                <td>
                    <label for="email">
                        E-mail:
                    </label>
                </td>

                <td>
                    <input
                        type="text"
                        id="email"
                        name="email"
                        placeholder="Enter Your E-mail"
                    >
                </td>

            </tr>


            <!-- Website -->
            <tr>

                <td>
                    <label for="website">
                        Website:
                    </label>
                </td>

                <td>
                    <input
                        type="text"
                        id="website"
                        name="website"
                    >
                </td>

            </tr>


            <!-- Comment -->
            <tr>

                <td>
                    <label for="comment">
                        Comment:
                    </label>
                </td>

                <td>
                    <textarea
                        id="comment"
                        name="comment"
                        rows="5"
                        cols="30"
                    ></textarea>
                </td>

            </tr>


            <!-- Gender -->
            <tr>

                <td>
                    <label>
                        Gender:
                    </label>
                </td>

                <td>

                    <input
                        type="radio"
                        name="gender"
                        value="Female"
                    >
                    Female

                    <input
                        type="radio"
                        name="gender"
                        value="Male"
                    >
                    Male

                    <input
                        type="radio"
                        name="gender"
                        value="Other"
                    >
                    Other

                </td>

            </tr>


            <!-- Submit -->
            <tr>

                <td></td>

                <td>

                    <input
                        type="submit"
                        id="submit"
                        name="submit"
                        value="Submit"
                    >

                </td>

            </tr>

        </table>

    </form>

</body>

</html>

