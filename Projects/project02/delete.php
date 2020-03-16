<?php
    //Start the session
    require_once('startsession.php');
    require_once('header.php');
    require_once('appvars.php');
    //Connect DB
    require_once('connectvars.php');
    require_once('navmenu.php');
    
    if (isset($_GET['id'])) {
        // Grab the score data from the GET
        $id = $_GET['id'];

    }
    else if (isset($_POST['id'])) {
        // Grab the score data from the POST
        $id = $_POST['id'];
    }
    echo 'ID: ' .$id;
        
    if (isset($_POST['submit'])) 
    {
        if ($_POST['confirm'] == 'Yes') 
        {
            
            // Connect to the database
            $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
                or die ('Error connect DB');

            // Delete the score data from the database
            
            $query = "DELETE FROM exercise_log WHERE id = $id LIMIT 1";
            //echo "<br/>$query<br/>";
            mysqli_query($dbc, $query)
                or die ('Error Delete from DB');
            
            mysqli_close($dbc);

            // Confirm success with the user
            echo '<p>The log was successfully removed.';
        }
        else {
            echo '<p>You cancel to delete log <a href="viewProfile.php">&lt;&lt; Back to viewProfile page</a></p>';
        }
    }
    else if (isset($id)) {
        echo '<p>Are you sure you want to delete the log?</p>';
        echo '<form method="post" action="delete.php">';
        echo '<input type="radio" name="confirm" value="Yes" /> Yes ';
        echo '<input type="radio" name="confirm" value="No" checked="checked" /> No<br />';
        echo '<input type="submit" value="Submit" name="submit" />';
        //echo '<input type="submit" value="Yes" name="confirm" /><br/>';
        //echo '<input type="submit" value="No" name="confirm" />';
        echo '<input type="hidden" name="id" value="' . $id . '" />';

        echo '</form>';
    }
    


    echo '<p><a href="viewProfile.php">&lt;&lt; Back to viewProfile page</a></p>';
?>
