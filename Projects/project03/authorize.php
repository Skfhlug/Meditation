<?php
  //User name and password for aunthentication
  $username = 'Alex';
  $password = 'Alex';
  
  $query = "SELECT id, username FROM admins WHERE username = '$username' AND password = SHA('$password')";

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
  
  if(!isset($_SERVER['PHP_AUTH_USER']) ||
      !isset($_SERVER['PHP_AUTH_PW']) ||
      ($_SERVER['PHP_AUTH_USER'] != $username) || ($_SERVER['PHP_AUTH_PW'] != $password))
  {
    header('HTTP/1.1401 Unautorized');
    header('WWW-Authenticate: Basic realm = "Guitar Wars"');
    exit('<h2>Guitar Wars</h2> Sorry, you must enter a valid username and password to '.'access this page.');
  }
  
?>