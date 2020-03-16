<?php
    //Start the session
    require_once('startsession.php');
    require_once('header.php');
    //Connect DB
    require_once('connectvars.php');
    require_once('navmenu.php');
    
    if (isset($_GET['blogID'])) {
        // Grab the score data from the GET
        $blogID = $_GET['blogID'];

    }
    else if (isset($_POST['blogID'])) {
        // Grab the score data from the POST
        $blogID = $_POST['blogID'];
    }
    echo '<p>Blog ID: ' .$blogID.'</p>';
        
    if (isset($_POST['submit'])) 
    {
        if ($_POST['confirm'] == 'Yes') 
        {
            
            // Connect to the database
            $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
                or die ('Error connect DB');

            // Delete the score data from the database
            
            $query = "DELETE FROM blog WHERE blogID = $blogID LIMIT 1";
            //echo "<br/>$query<br/>";
            mysqli_query($dbc, $query)
                or die ('Error Delete from DB');
            
            mysqli_close($dbc);

            // Confirm success with the user
            echo '<p>The log was successfully removed.';
        }
        else 
        {
            echo '<p>You cancel to delete log</p>';
        }
    }
    else if (isset($blogID)) {
        echo '<p>Are you sure you want to delete the log?</p>';
        echo '<form method="post" action="deleteBlog.php">';
        echo '<input type="radio" name="confirm" value="Yes" /> Yes ';
        echo '<input type="radio" name="confirm" value="No" checked="checked" /> No<br />';
        echo '<input type="submit" value="Submit" name="submit" />';

        echo '<input type="hidden" name="blogID" value="' . $blogID . '" />';

        echo '</form>';
    }
    


    echo '<p><a href="admin.php">&lt;&lt; Back to Admin page</a></p>';
?>
