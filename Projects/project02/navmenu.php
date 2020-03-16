<?php
    //Generate the navigation menu
    echo '<hr />';
    if (isset($_SESSION['username']))
    {
        echo '<div><a class = "navbar" href="index.php">Home</a>';
        echo '<a class = "navbar" href="viewProfile.php">View Profile</a>';
        echo '<a class = "navbar" href="editProfile.php">Edit Profile</a>';
        echo '<a class = "navbar" href="logExercise.php">Log Exercise</a>';
        echo '<a class = "navbar" href="logout.php">Log out ('.$_SESSION['userID']. ')</a><br/><br/>';
        //echo '<a class = "id"> User ID ('.$_SESSION['userID']. ')</a></div>';
        
    }
    
    else
    {
        echo '<a class = "navbar" href = "login.php">Log In</a>';
        echo '<a class = "navbar" href = "signup.php">Sign Up</a>';
    }    
    echo '<hr/>';
?>