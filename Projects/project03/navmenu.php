<?php
    //Generate the navigation menu
    /*echo '<hr/>';
    if (isset($_SESSION['username']))
    {
        echo '<div class="mainMenu"><a href="index.php">Home</a>';
        echo '<a>Welcome ('.$_SESSION['username']. ') </a>';
        echo '<a class = "navbar" href="admin.php">Admin</a>';
        echo '<a class = "navbar" href="signup.php">Add admin</a>';
        echo '<a class = "navbar" href="logout.php">Log out</a></div>';

    }
    
    else
    {
        echo '<a class = "navbar" href="index.php">Home</a>';
        echo '<a class = "navbar" href = "login.php">Log In(for only admin) </a>';
        
    }    
    echo '<hr/>';

?>
<?php*/
    //Generate the navigation menu
    echo '<hr/>';
    if (isset($_SESSION['username']))
    {
        echo '<div class="mainMenu"><a href="index.php">Home</a>';
        echo '<a>Welcome ('.$_SESSION['username']. ') </a>';
        echo '<a class = "navbar" href="admin.php">Admin</a>';
        echo '<a class = "navbar" href="signup.php">Add admin</a>';
        echo '<a class = "navbar" href="logout.php">Log out</a></div>';

    }
    
    else
    {
        echo '<a class = "navbar" href="index.php">Home</a>';
        echo '<a class = "navbar" href = "login.php">Log In(for only admin) </a>';
        
    }    
    echo '<hr/>';

?>