<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css" />
    
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
        echo '<a class="newBlogLink" href="createMeditationBlog.php">Create a new blog</a>';
        echo '<a class="newBlogLink" href="commentedBlog.php">Completed Comments</a>';
        echo '<br/>';
        // Retrieve the user data from MySQL
        $query = "SELECT * FROM blog WHERE username = '$username' ORDER BY blogId DESC";
        
        //echo "$query";
        
        $result = mysqli_query($dbc, $query)
                or die('Error querying select data from database');            
    
        
        echo '<table class="table table-striped" style="width: 900px;"><thead><tr><th>ID</th>'.
            '<th>Title</th><th>Time</th><th>Prep</th>'.
            '<th>Meditation Experience</th><th>Benefit of Meditation</th></tr></thead><tboby>';
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
            echo '</td><td>' . $benefitDescription. '</td></tr>';
    
        }
        echo '</tbody></table>';
        //Close database
        mysqli_close($dbc);
    }
    
    if (isset($_SESSION['username']) && (($_SESSION['userPrivilege'] == '2')) )
    {
        echo '<a class="newBlogLink" href="commentedBlog.php">Completed Comments</a>';
        echo '<br/>';
        // Retrieve the user data from MySQL
        $query = "SELECT * FROM blog WHERE commentStatus IS NULL ORDER BY blogId DESC;";
        
        //echo "$query";
        
        $result = mysqli_query($dbc, $query)
                or die('Error querying select data from database');            
    
        
        echo '<table class="table table-striped"><thead><tr><th>ID</th>'.
            '<th>Title</th><th>Time</th><th>Prep</th>'.
            '<th>Meditation Experience</th><th>Benefit of Meditation</th><th>Comment</th></tr></thead><tboby>';
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
            echo '</td><td> Description' . $description;
            echo '</td><td> Benefit' . $benefitDescription;
            echo '</td><td><a href="addComment.php? blogId=' . $row['blogId'].'">Add Comment</a></td></tr>';
    
        }
        echo '</tbody></table>';
        //Close database
        mysqli_close($dbc);
        echo '<a class="newBlogLink" href="commentedBlog.php">Completed Comments</a>';
    }
    if (isset($_SESSION['username']) && (($_SESSION['userPrivilege'] == '3')) )
    {

        // Retrieve the user data from MySQL
        $query = "SELECT * FROM blog ORDER BY blogId DESC;";
        
        //echo "$query";
        
        $result = mysqli_query($dbc, $query)
                or die('Error querying select data from database');            
    
        
        echo '<table class="table table-striped"><thead><tr><th>ID</th>'.
            '<th>Title</th><th>Time</th><th>Prep</th>'.
            '<th>Meditation Experience</th><th>Benefit of Meditation</th><th>username</th><th>Delete</th></tr></thead><tboby>';
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
            $usernameLog =$row['username'];
            
    
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
            echo '</td><td>' . $usernameLog;
            echo '</td><td><a href="deleteBlog.php? blogId=' . $row['blogId'].'">REMOVE</a></td></tr>';
    
        }
        echo '</tbody></table>';
        //Close database
        mysqli_close($dbc);
    }
    require_once('footer.php');
?>
</body>
</html>