<?php
  require_once('connectvars.php');
  require_once('header.php');
  require_once('navmenu.php');

  // Start the session
  session_start();

  // Clear the error message
  $error_msg = "";

    if (isset($_POST['submit'])) 
    {
        /*if ($_POST['clientType'] == 'user') 
        {
                // Connect to the database
            $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    
            // Grab the user-entered log-in data
    
            $user_username = mysqli_real_escape_string($dbc, trim($_POST['username']));
            $user_password = mysqli_real_escape_string($dbc, trim($_POST['password']));
    
            if (!empty($user_username) && !empty($user_password)) 
            {
                // Look up the username and password in the database
                $query = "SELECT userID, username FROM user WHERE username = '$user_username' AND password = SHA('$user_password')";
                $data = mysqli_query($dbc, $query);
        
                if (mysqli_num_rows($data) == 1) 
                {
                    // The log-in is OK so set the user ID and username session vars (and cookies), and redirect to the home page
                    $row = mysqli_fetch_array($data);
                    $_SESSION['user_id'] = $row['adminID'];
                    $_SESSION['username'] = $row['username'];
                    setcookie('user_id', $row['user_id'], time() + (60 * 60 * 24 * 30));    // expires in 30 days
                    setcookie('username', $row['username'], time() + (60 * 60 * 24 * 30));  // expires in 30 days
                    $home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/index.php';
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
                $error_msg = 'Sorry, you must enter your username and password to log in.';
            }
        }
        if ($_POST['clientType'] == 'admin') 
        {
            // Connect to the database
            $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    
            // Grab the user-entered log-in data
    
            $user_username = mysqli_real_escape_string($dbc, trim($_POST['username']));
            $user_password = mysqli_real_escape_string($dbc, trim($_POST['password']));
    
            if (!empty($user_username) && !empty($user_password)) 
            {
                // Look up the username and password in the database
                $query = "SELECT adminID, username FROM admin WHERE username = '$user_username' AND password = SHA('$user_password')";
                $data = mysqli_query($dbc, $query);
        
                if (mysqli_num_rows($data) == 1) 
                {
                    // The log-in is OK so set the user ID and username session vars (and cookies), and redirect to the home page
                    $row = mysqli_fetch_array($data);
                    $_SESSION['user_id'] = $row['adminID'];
                    $_SESSION['username'] = $row['username'];
                    setcookie('user_id', $row['user_id'], time() + (60 * 60 * 24 * 30));    // expires in 30 days
                    setcookie('username', $row['username'], time() + (60 * 60 * 24 * 30));  // expires in 30 days
                    $home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/index.php';
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
                $error_msg = 'Sorry, you must enter your username and password to log in.';
            }
        }*/
        //if ($_POST['clientType'] == 'master') 
        //{
            // Connect to the database
            $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    
            // Grab the user-entered log-in data
    
            $user_username = mysqli_real_escape_string($dbc, trim($_POST['username']));
            $user_password = mysqli_real_escape_string($dbc, trim($_POST['password']));
    
            if (!empty($user_username) && !empty($user_password)) 
            {
                // Look up the username and password in the database
                $query = "SELECT userID, username, userPrivilege FROM user WHERE username = '$user_username' AND password = SHA('$user_password')";
                $data = mysqli_query($dbc, $query);
        
                if (mysqli_num_rows($data) == 1) 
                {
                    // The log-in is OK so set the user ID and username session vars (and cookies), and redirect to the home page
                    $row = mysqli_fetch_array($data);
                    $_SESSION['user_id'] = $row['userID'];
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['userPrivilege'] = $row['userPrivilege'];
                    setcookie('user_id', $row['user_id'], time() + (60 * 60 * 24 * 30));    // expires in 30 days
                    setcookie('username', $row['username'], time() + (60 * 60 * 24 * 30));  // expires in 30 days
                    setcookie('userPrivilege', $row['userPrivilege'], time() + (60 * 60 * 24 * 30));    // expires in 30 days
                    $home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/index.php';
                    header('Location: ' . $home_url);
                }
                else 
                {
                  // The username/password are incorrect so set an error message
                  $error_msg = 'Sorry, you must enter a valid username and password to log in.';
                }
            }/*
            else 
            {
                // The username/password weren't entered so set an error message
                $error_msg = 'Sorry, you must enter your username and password to log in.';
            }*/
        //}
    }

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Inner Peace - Memmber Log In</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
  <h3>Meditation Member - Log In</h3>

<?php
  // If the session var is empty, show any error message and the log-in form; otherwise confirm the log-in
  if (empty($_SESSION['user_id'])) {
    echo '<p class="error">' . $error_msg . '</p>';
?>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <fieldset>
      <!--<legend>Log In</legend> 
        <input type="radio" name="clientType" value="user" checked="checked"> User<br>
        <input type="radio" name="clientType" value="admin"> Admin<br>
        <input type="radio" name="clientType" value="master"> Instrutor<br><br/>-->
      <label for="exampleFormControlInput1">Username:</label>
      <input type="text" class="form-control" name="username" value="<?php if (!empty($user_username)) echo $user_username; ?>" /><br />
      <label for="exampleFormControlInput1">Password:</label>
      <input type="password" class="form-control" name="password" />
    </fieldset>
    <br/>
    <input type="submit" value="Log In" name="submit" /><br/><br/>
    <a class="registerLogin" href = "userRegister.php">Register for new member</a>
  </form>

<?php
  }
  else {
    // Confirm the successful log-in
    echo('<p class="login">You are logged in as ' . $_SESSION['username'] . '.</p>');
  }
?>

</body>
</html>
