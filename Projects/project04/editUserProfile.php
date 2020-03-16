
<?php
    session_start();
    require_once('connectvars.php');
    //require_once('startsession.php');
    require_once('header.php');
    require_once('navmenu.php');

    
    // Connect to the database
    $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    if (isset($_POST['submit'])) 
    {
        // Grab the profile data from the POST
        $firstName = mysqli_real_escape_string($dbc, trim($_POST['firstName']));
        $lastName = mysqli_real_escape_string($dbc, trim($_POST['lastName']));
        $address = mysqli_real_escape_string($dbc, trim($_POST['address']));
        $state = mysqli_real_escape_string($dbc, trim($_POST['state']));
        $zip = $_POST['zip'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        
        $error = false;


    // Update the profile data in the database
    if (!$error) 
    {
        if (!empty($firstName) && !empty($lastName) && !empty($address) && !empty($zip) && !empty($email) && !empty($phone)) 
        {

            $query = "UPDATE user SET firstName = '$firstName', lastName = '$lastName', " .
            " address = '$address', state = '$state', zip = '$zip', email = '$email', phone = '$phone' WHERE username = '" . $_SESSION['username'] . "'";

            mysqli_query($dbc, $query);
            
            // Confirm success with the user
            echo '<p>Your profile has been successfully updated. Would you like to <a href="index.php">Home page</a>?</p>';
            
            mysqli_close($dbc);
            exit();
            }
            else 
            {
                echo '<p class="error">You must enter all of the profile data (the picture is optional).</p>';
            }
        }
    } // End of check for form submission
    else 
    {
        // Grab the profile data from the database
        $query = "SELECT * FROM user WHERE username = '" . $_SESSION['username'] . "'";
        
        //$query = "SELECT username, password, firstName, lastName, address, state, zip, email, phone FROM user WHERE username = '" . $_SESSION['username'] . "'";
        $data = mysqli_query($dbc, $query)
            or die ('Error query Database');
        $row = mysqli_fetch_array($data);
        
        if ($row != NULL) 
        {
            $password = $row['password'];
            $firstName = $row['firstName'];
            $lastName = $row['lastName'];
            $address = $row['address'];
            $state = $row['state'];
            $zip = $row['zip'];
            $email = $row['email'];
            $phone = $row['phone'];
        }
        else 
        {
            echo '<p class="error">There was a problem accessing your profile.</p>';
        }
    }

    mysqli_close($dbc);
?>

    <form enctype="multipart/form-data" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        
        <label for="exampleFormControlInput1">First Name:</label>
        <input type="text" class="form-control" name="firstName" value="<?php if (!empty($firstName)) echo $firstName; ?>"/>
        <label for="exampleFormControlInput1">Last Name:</label>
        <input type="text" class="form-control" name="lastName" value="<?php if (!empty($lastName)) echo $lastName; ?>"/>
        <label for="exampleFormControlInput1">Address:</label>
        <input type="text" class="form-control" name="address" value="<?php if (!empty($address)) echo $address; ?>"/>
        <label for="exampleFormControlInput1">State:</label>
        <input type="text" class="form-control" name="state" value="<?php if (!empty($state)) echo $state; ?>"/>
        <label for="exampleFormControlInput1">Zip:</label>
        <input type="text" class="form-control" name="zip" value="<?php if (!empty($zip)) echo $zip; ?>"/>
        <label for="exampleFormControlInput1">Email:</label>
        <input type="email" class="form-control" name="email" value="<?php if (!empty($email)) echo $email; ?>"/>
        <label for="exampleFormControlInput1">phone:</label>
        <input type="text" class="form-control" name="phone" value="<?php if (!empty($phone)) echo $phone; ?>"/><br/>      
        
        </fieldset>
        <input type="submit" value="Save Profile" name="submit" />
    </form>
</body> 
</html>
