<?php
    //require_once('appvars.php');
    require_once('connectvars.php');
    require_once('header.php');
    require_once('startsession.php');
    require_once('navmenu.php');
    // Connect to the database
    $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    
    if (isset($_POST['submit'])) 
    {
        // Grab the profile data from the POST
        $username = mysqli_real_escape_string($dbc, trim($_POST['username']));
        $password1 = mysqli_real_escape_string($dbc, trim($_POST['password1']));
        $password2 = mysqli_real_escape_string($dbc, trim($_POST['password2']));
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        
        if (!empty($username) && !empty($password1) && !empty($password2) && ($password1 == $password2)) 
        {
            // Make sure someone isn't already registered using this username
            $query = "SELECT * FROM admins WHERE username = '$username'";
            $data = mysqli_query($dbc, $query)
                or die ('Error Select DB');
                
            if (mysqli_num_rows($data) == 0) 
            {
                // The username is unique, so insert the data into the database
                $query = "INSERT INTO admins (username, password, firstName, lastName, email, phone)".
                    "VALUES ('$username', SHA('$password1'),'$firstName', '$lastName', '$email', '$phone')";
                mysqli_query($dbc, $query)
                    or die ('Error query DB');

                echo '<p>Your new account has been successfully created.';
                mysqli_close($dbc);
                exit();
            }
            else 
            {
                // An account already exists for this username, so display an error message
                echo '<p class="error">An account already exists for this username. Please use a different address.</p>';
                $username = "";
            }
        }
        else 
        {
            echo '<p class="error">You must enter all of the sign-up data, including the desired password twice.</p>';
        }
        
    }
    mysqli_close($dbc);
?>
<html>
    <body>
        <p style="margin-left: 550px;">Please enter your username and desired password to sign up to Exercise Logger.</p>
        <form class="form-group" method="post" style="margin:auto; width: 500px;"action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <fieldset>
        <legend>Registration Info for new Admin</legend>
        <label for="exampleFormControlInput1">Username:</label>
        <input type="text" class="form-control" name="username" value="<?php if (!empty($username)) echo $username; ?>" />
        <label for="exampleFormControlInput1">Password:</label>
        <input type="password" class="form-control" name="password1" />
        <label for="exampleFormControlInput1">Password (retype):</label>
        <input type="password" class="form-control" name="password2" />
        </fieldset>
        
        
        <label for="exampleFormControlInput1">First Name:</label>
        <input type="text" class="form-control" name="firstName" />
        <label for="exampleFormControlInput1">Last Name:</label>
        <input type="text" class="form-control" name="lastName" />
        <label for="exampleFormControlInput1">Email:</label>
        <input type="email" class="form-control" name="email" />
        <label for="exampleFormControlInput1">phone:</label>
        <input type="text" class="form-control" name="phone" /><br/>      
        
        <input type="submit" value="Sign Up" name="submit" />
        </form>
    </body> 
</html>
