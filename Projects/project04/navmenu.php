<?php
    //Generate the navigation menu
    require_once('startsession.php');
    echo '<hr/>';
    
    if (isset($_SESSION['username']) && (($_SESSION['userPrivilege'] == '1')) )
    {
        echo '<nav role="navigation" aria-label="main menu"><ul role="menubar"><li role="menuitem"><a href="index.php">Home  </a>';
        echo '<li role="menuitem"><a href="meditationDiary.php">Meditation Blog</a></li>';
        echo '<li role="menuitem"><a href = "editUserProfile.php">Profile Setting</a></li>';
        echo '<li role="menuitem"><a href="logout.php">Log out</a></li></ul></nav>';
        echo '<p><a class= "welcome">Welcome ('.$_SESSION['username']. ')</a></p>';
    }
    else if (isset($_SESSION['username']) && (($_SESSION['userPrivilege'] == '2')) )
    {
        echo '<nav role="navigation" aria-label="main menu"><ul role="menubar"><li role="menuitem"><a href="index.php">Home  </a></li>';
        echo '<li role="menuitem"><a href="meditationDiary.php">Meditation Blog</a></li>';
        echo '<li role="menuitem"><a href = "editMasterProfile.php">Profile Setting</a></li>';
        echo '<li role="menuitem"><a href="logout.php">Log out</a></li></ul></nav>';
        echo '<p><a class= "welcome">Welcome ('.$_SESSION['username']. ')</a></p>';
    }
    else if (isset($_SESSION['username']) && (($_SESSION['userPrivilege'] == '3')) )
    {

        echo '<nav role="navigation" aria-label="main menu"><ul role="menubar"><li role="menuitem"><a href="index.php">Home  </a></li>';
        //echo '<li role="menuitem"><a>Welcome Admin ('.$_SESSION['username']. ') </a></li>';
        echo '<li role="menuitem"><a href="meditationDiary.php">Meditation Blog</a></li>';
        echo '<li role="menuitem"><a href = "editUserProfile.php">Profile Setting</a></li>';
        echo '<li role="menuitem"><a href = "#">Add Service team</a>';
        echo '<ul><li role="menuitem"><a href = "adminRegister.php">Add Admin</a></li>';
        echo '<li role="menuitem"><a href = "masterRegister.php">Add Master</a></li>';
        echo '</ul>';
        echo '<li role="menuitem"><a href="logout.php">Log out</a></nav></li></ul></nav>';
        echo '<p><a class= "welcome">Welcome ('.$_SESSION['username']. ')</a></p>';
    }
    else
    {   
        echo '<nav role="navigation" aria-label="main menu"><ul role="menubar"><li class="navHome" role="menuitem"><a class = "navbar" href="index.php">Home</a></li>';
        echo '<li role="menuitem"><a class = "navbar" href = "login.php">Log In</a></li></ul></nav>';
        
    }    
    echo '<hr/>';

?>
