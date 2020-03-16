<?php
    require_once('connectvars.php');
    
    //Start the session
    session_start();
    //Clear the error message
    $error_msg = "";
    
    //If the user isn't llogged in, try to log them in
    if (!isset($_SESSION['userID']))
    {
        if (!isset($_POST['submit'])) 
        {
            //Connect to the database
            $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
                or die ('Error connect DB');
                
            //Grab the user-entered log-in data
            $user_username = mysqli_real_escape_string($dbc, trim($_POST['username']));
            $user_password = mysqli_real_escape_string($dbc, trim($_POST['password']));
            
            if (!empty($user_username) && !empty($user_password))
            {
                //Look up the username and password in the database
                $query = "SELECT userID, username, password FROM exercise_user WHERE username ='$user_username' AND ".
                        "password = SHA('$user_password')";
                $data = mysqli_query($dbc, $query)
                    or die ('Error query DB');
                
                if (mysqli_num_rows($data) == 1)
                {
                    //The login is OK so set the user ID and username cookies, and redirec to the home page
                    $row = mysqli_fetch_array($data);
                    $_SESSION['userID'] =  $row['userID'];
                    $_SESSION['username'] = $row['username'];
                    
                    
                    setcookie('userID', $row['userID'], time() +(60));//(60*60*24*30)); //expires in 30 days
                    setcookie('username', $row['username'], time() +(60));//(60*60*24*30)); //expires in 30 days
                    $home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']).'/index.php';
                    header('Location: '. $home_url);
                }
                else
                {
                    //The username/password are incorrect so set an errormessage
                    $error_msg = 'Sorry, you must enter a valid username and password to log in.';
                }
            }
            else
            {
                //The user/password weren't entered so set an rror message
                $error_msg = 'Please enter your username and password to login.';
            
            }
        }
    }
?>

<html>
    <head>
        <title>Excercise Logger - log In</title>
        <link rel="stylesheet" type = "text/css" href="style.css".>
    </head>
    <body>
        <h3>Exercise User - Log In</h3>

        <?php
            //If the cookie is empty, show any error message and the log-in form; otherwise confirm log-in
            if (empty($_SESSION['userID']))
            {
                echo '<p class = "error">'.$error_msg.'</p>';
        ?>
        
        <form class="dropdown-menu p-4" method = "post" action ="<?php echo $_SERVER['PHP_SELF']; ?>">
            <filedset>
                <div class="form-group">
                <legend>Log In</legend>
                <label for="exampleDropdownFormEmail2">Username: </label>
                <input class="form-control" id="exampleDropdownFormEmail2" type="text" name="username" value="<?php if (!empty($username)) echo $username; ?>" /></div>
                
                <div class="form-group">
                <label for="exampleDropdownFormPassword2">Password: </label>
                <input type = "password" class="form-control" id="exampleDropdownFormPassword2" name= "password" /><br /><br /></div>
            </filedset>
            <a href="signup.php">Click here for sign up</a><br /><br />
            <input type = "submit" value ="Login" name "submit" />
        </form>
        

        
        <?php
            }
            else
            {
                //Confirm the successful log in
                echo('<p class="login"> You are login as '. $_COOKIE['username'].'.</p');
            }
        ?>
    </body>
</html>
