<?php
    require_once('connectvars.php');
    require_once('header.php');
    require_once('navmenu.php');
    //Start the session
    session_start();
    //Clear the error message
    $error_msg = "";

      // If the user isn't logged in, try to log them in
    if (!isset($_SESSION['id'])) 
    {
        if (isset($_POST['submit'])) 
        {
            // Connect to the database
            $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    
            // Grab the user-entered log-in data
            $username = mysqli_real_escape_string($dbc, trim($_POST['username']));
            $password = mysqli_real_escape_string($dbc, trim($_POST['password']));
    
            if (!empty($username) && !empty($password)) 
            {
                // Look up the username and password in the database
                $query = "SELECT id, username, password FROM admins WHERE username ='$username' AND ".
                        "password = SHA('$password')";

                $data = mysqli_query($dbc, $query)
                        or die('Error querying select data from database');
                
                
                if (mysqli_num_rows($data) == 1) 
                {
                    // The log-in is OK so set the user ID and username session vars (and cookies), and redirect to the home page
                    $row = mysqli_fetch_array($data);
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['username'] = $row['username'];
                    
                    setcookie('id', $row['id'], time() + (60 * 60 * 24 * 30));    // expires in 30 days
                    setcookie('username', $row['username'], time() + (60 * 60 * 24 * 30));  // expires in 30 days
                    $home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/admin.php';
                    header('Location: ' . $home_url);
                }
                else 
                {
                  // The username/password are incorrect so set an error message
                  $error_msg = 'Sorry, you must enter a valid username and password to log in.';
                }
            }
            else 
            {
                // The username/password weren't entered so set an error message
                $error_msg = 'Sorry, you must enter your username and password to log in2.';
            }
        }
    }
?>

<html>
    <head>
        <title>Admin - log In</title>
        <link rel="stylesheet" type = "text/css" href="style.css".>
    </head>
    <body>
            
        <h3 style="margin-left: 700px;">Admin - Log In</h3>

        <?php
            //If the cookie is empty, show any error message and the log-in form; otherwise confirm log-in
            if (empty($_SESSION['id']))
            {
                echo '<p class = "error">'.$error_msg.'</p>';
        ?>



    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" style="width: 500px; margin:auto;">
    <fieldset>
      <legend>Log In</legend>
      <label>Username:</label>
      <input type="text" class="form-control" name="username" value="<?php if (!empty($username)) echo $username; ?>" /><br />
      <label>Password:</label>
      <input type="password" class="form-control" name="password" />
    </fieldset><br/>
    <input type="submit" value="Log In" name="submit" />
  </form>
        
        <?php
            }
            else
            {
                //Confirm the successful log in
                echo '<p class="login"> You are login as '. $_SESSION['username'].'</p>' ;
                echo '<a href="admin.php">Click here to go to admin page</a>';
            }
        ?>
    </body>
</html>
