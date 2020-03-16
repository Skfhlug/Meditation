<?php
    //Start the session
    require_once('startsession.php');
    require_once('header.php');
    require_once('connectvars.php');
    require_once('navmenu.php');
    $page_title = 'Inner Peace - Add Comment!';
    if (isset($_GET['blogId'])) 
    {
        // Grab the score data from the GET
        $blogId = $_GET['blogId'];

    }
    else if (isset($_POST['blogId'])) 
    {
        // Grab the score data from the POST
        $blogId = $_POST['blogId'];
    }
    
    $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    $query = "SELECT * FROM blog WHERE blogId = '$blogId';";


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
            
            echo '<div class="displayPost">';
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
        
            $commentStatus = mysqli_real_escape_string($dbc, trim($_POST['comment']));
            $user_id = $_SESSION['user_id'];
            $blogId = $_POST['blogID'];
            // Connect to the database
            $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
                or die ('Error connect DB');
        
        
            $query = "UPDATE blog SET commentStatus = '$commentStatus', masterID ='$user_id' WHERE blogId ='$blogId' LIMIT 1;";
            //echo "<br/>$query<br/>";
            mysqli_query($dbc, $query)
                or die ('Error Update to DB');
            
            mysqli_close($dbc);

            // Confirm success with the user
            echo '<div class = "displayPost"><p>Blog ID: ' .$blogId.'</p>';
            echo '<p>The comment was successfully addedd.';

    }
    else if (isset($blogId)) {

        echo '<form class="form-group" action="addComment.php" method="post">';
    
        echo '<label for="exampleFormControlInput1">Enter your comment here: </label><br>';
        echo '<textarea class="form-control" name="comment" value="Comment"></textarea>';
        echo '<br>';
        
        echo '<input type="submit" value="Update" name="submit" />';
        echo '<input type="hidden" name="blogID" value="' . $blogId . '" />';

        echo '</form>';
    }
    

    
    echo '<p><a href="meditationDiary.php">&lt;&lt; Back to Meditation Blog page</a></p>';
?>
