<!DOCTYPE html>
<html>

<?php 

    require_once('startsession.php');
    require_once('header.php');
    require_once('connectvars.php');
    require_once('navmenu.php');
?>

    

<?php 
    //Connect project4 database
    $username = $_SESSION['username'];
    $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
        or die('Error connecting to MySQLserver');
                
    if (isset($_SESSION['username']) && (($_SESSION['userPrivilege'] == '1')) )
    {
        
        // Retrieve the user data from MySQL
        $query = "SELECT * FROM blog WHERE commentStatus IS NOT NULL AND username = '$username'  ORDER BY blogId DESC;";
        
        //echo "$query";
        
        $result = mysqli_query($dbc, $query)
                or die('Error querying select data from database');            
    
        echo '<a class="newBlogLink" href="meditationDiary.php">Go Back to the Blog</a>';
        echo '<br/>';
        echo '<table class="table table-striped" style="margin-right: 200px;"><thead><tr><th>Blog ID</th>'.
            '<th>Title</th><th>Time</th><th>Adjust Feeling</th>'.
            '<th>Meditation Experience</th><th>Benefit of meditation</th><th>Comment</th></tr></thead><tboby>';
        while ($row = mysqli_fetch_array($result)) 
        {
            $blogID = $row['blogId'];
            $title = $row['title'];
            $totalTime = $row['totalTime'];
            $postDate = $row['postDate'];
            $adjustFeeling = $row['adjustFeeling'];
            $description = $row['description'];
            $benefitDescription = $row['benefitDescription'];
            $commentStatus = $row['commentStatus'];
            
    
            echo '<tr><td>' . $blogID;
            echo '</td><td>' . $title;
            echo '</td><td>' . $totalTime;
            if ($adjustFeeling == 'y')
            {
                echo '</td><td> Yes ';
            }
            if ($adjustFeeling == 'n')
            {
                echo '</td><td> No ';
            }
            echo '</td><td>' . $description;
            echo '</td><td>' . $benefitDescription;
            echo '</td><td>'. $commentStatus.'</td></tr>';
    
        }
        echo '</tbody></table>';
        //Close database
        mysqli_close($dbc);
    }
    
    if (isset($_SESSION['username']) && (($_SESSION['userPrivilege'] == '2')) )
    {
        echo '<a class="newBlogLink" href="meditationDiary.php">Go Back to the Blog</a>';
        echo '<br/>';
        // Retrieve the user data from MySQL
        $query = "SELECT * FROM blog WHERE commentStatus IS NOT NULL ORDER BY blogId DESC;";
        
        //echo "$query";
        
        $result = mysqli_query($dbc, $query)
                or die('Error querying select data from database');            
    

        echo '<table class="table table-striped"><thead><tr><th>Blog ID</th>'.
            '<th>Title</th><th>Time</th><th>Adjust Feeling</th>'.
            '<th>Meditation Experience</th><th>Benefit of meditation</th><th>Comment</th><th>username</th></tr></thead><tboby>';
        while ($row = mysqli_fetch_array($result)) 
        {
            $blogID = $row['blogId'];
            $title = $row['title'];
            $totalTime = $row['totalTime'];
            $postDate = $row['postDate'];
            $adjustFeeling = $row['adjustFeeling'];
            $description = $row['description'];
            $benefitDescription = $row['benefitDescription'];
            $commentStatus = $row['commentStatus'];
            $user_username = $row['username'];
            
    
            echo '<tr><td>' . $blogID;
            echo '</td><td>' . $title;
            echo '</td><td>' . $totalTime;
            if ($adjustFeeling == 'y')
            {
                echo '</td><td> Yes ';
            }
            if ($adjustFeeling == 'n')
            {
                echo '</td><td> No ';
            }
            echo '</td><td>' . $description;
            echo '</td><td>' . $benefitDescription;
            echo '</td><td>' . $commentStatus;
            echo '</td><td>' .$user_username.'</td></tr>';
    
        }
        echo '</tbody></table>';
        //Close database
        mysqli_close($dbc);
    }
    require_once('footer.php');
?>
</body>
</html>