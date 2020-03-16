<?php
    //Start the session
    require_once('startsession.php');
    require_once('header.php');
    //Connect DB
    require_once('connectvars.php');
    require_once('navmenu.php');
    
    if (isset($_GET['blogId'])) {
        // Grab the score data from the GET
        $blogId = $_GET['blogId'];

    }
    else if (isset($_POST['blogId'])) {
        // Grab the score data from the POST
        $blogId = $_POST['blogId'];
    }
    
    
    $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    
    echo '<div class = "displayPost"><p>Blog ID: ' .$blogId.'</p>';
    $query = "SELECT * FROM blog WHERE blogId = '$blogId';";
    //echo "$query";

    $data = mysqli_query($dbc, $query)
            or die ('Error query Database');
    $row = mysqli_fetch_array($data);

    if ($row != NULL) 
        {
            $title = $row['title'];
            $totalTime = $row['totalTime'];
            $postDate = $row['postDate'];
            $adjustFeeling = $row['adjustFeeling'];
            $description = $row['description'];
            $benefitDescription = $row['benefitDescription'];
            $usernameLog =$row['username'];
    
            echo '<p> Title: ' . $title.'</p>';
            echo '<p> Total Meditation Time: ' . $totalTime.' minutes</p>';
            if ($adjustFeeling == 'y')
            {
                echo '<p> Adjusting emotion: Yes </p>';
            }
            if ($adjustFeeling == 'n')
            {
                echo '<p> Did not justing emotion: Yes </p>';
            }
            echo '<p> Meditation experience description: ' . $description.' </p>';
            echo '<p> Benefit of Meditaiton: ' . $benefitDescription.' </p></div>';

            mysqli_close($dbc);
        }
            
        
    if (isset($_POST['submit'])) 
    {
        if ($_POST['confirm'] == 'Yes') 
        {
            
            // Connect to the database
            $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
                or die ('Error connect DB');

            // Delete the score data from the database
            
            $query = "DELETE FROM blog WHERE blogId = $blogId LIMIT 1";
            //echo "<br/>$query<br/>";
            mysqli_query($dbc, $query)
                or die ('Error Delete from DB');
            
            mysqli_close($dbc);

            // Confirm success with the user
            echo '<p class= "confirmProcess">The log was successfully removed.';
        }
        else 
        {
            echo '<p class= "confirmProcess">You canceled blog deletion</p>';
        }
    }
    else if (isset($blogId)) {
        echo '<form method="post" action="deleteBlog.php">Are you sure you want to delete the log?<br/><br/>';
        echo '<input type="radio" name="confirm" value="Yes" /> Yes ';
        echo '<input type="radio" name="confirm" value="No" checked="checked" /> No<br />';
        echo '<input type="submit" value="Submit" name="submit" />';

        echo '<input type="hidden" name="blogId" value="' . $blogId . '" />';

        echo '</form>';
    }
    


    echo '<p class="goBack"><a href="meditationDiary.php">&lt;&lt; Back to Meditation Blog page</a></p>';
?>
