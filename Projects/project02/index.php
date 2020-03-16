<?php
    //Start the session
    require_once('startsession.php');
    
    //Insert the page header
    $page_title = 'Where opposites attract!';
    require_once('header.php');
    
    //require_once('appvars.php');
    require_once('connectvars.php');
    
    require_once('navmenu.php');
        
    
    // Connect to the database 
    $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
            or die ('Error connect Database');

    // Retrieve the user data from MySQL
    $query = "SELECT first_name, last_name FROM exercise_user where userID = '" . $_SESSION['userID'] . "'";
    $data = mysqli_query($dbc, $query)
            or die ('Error query DB');
            
    $row = mysqli_fetch_array($data);

    echo '<h1>Welcome '. $row['first_name'] . ' ' .$row['last_name'] .' to our log exercise website</h1>';
    ?>

</body> 
</html>
