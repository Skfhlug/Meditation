<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<?php 
    //Start the session
    require_once('startsession.php');
    
    //Insert the page header
    //$page_title = 'Where opposites attract!';
    require_once('header.php');
    require_once('connectvars.php');
    require_once('navmenu.php');
?>
    
    <form class="form-group" action="index.php" method="post">
    
        <label for="exampleFormControlInput1">Title: </label><br>
        <input type="text" id="exampleFormControlInput1" name="title" value="Title">
        <br>
        
        <label for="exampleFormControlTextarea1">Post: </label><br/>
        <textarea id="exampleFormControlTextarea1" name="post" rows="3" value="Blog description"></textarea>
        <br/>
        <input type="submit" value="Submit" name="submit"><br/>
    </form> 
<?php
    if (isset($_POST['submit'])) 
    {
        //Connect to Database
        $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
            or die('Error connecting to MySQLserver');
        
        $title = mysqli_real_escape_string($dbc, trim($_POST['title']));
        $post = mysqli_real_escape_string($dbc, trim($_POST['post']));
            
        // Write the data to the database
        $query = "INSERT INTO blog VALUES (0, '$title', NOW(), '$post')";
        mysqli_query($dbc, $query)
            or die('Error querying INSERT database');
        
        //Close databas
        mysqli_close($dbc);
        
    }

    //Insert madlib story into DB
    $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
        or die('Error connecting to MySQLserver');
                
                
    // Retrieve the user data from MySQL
    $query = "SELECT * FROM blog ORDER BY postDate DESC";
    $data = mysqli_query($dbc, $query);
    $result = mysqli_query($dbc, $query)
            or die('Error querying select data from database');            
    $row = mysqli_fetch_array($data);
    
    
    echo '<table class="table table-striped"><thead><tr><th>id</th><th>Title</th><th>Date</th><th>Post</th></tr></thead><tboby>';
    while ($row = mysqli_fetch_array($result)) 
    {
        $blogID = $row['blogID'];
        $title = $row['title'];
        $postDate = $row['postDate'];
        $post = $row['post'];

        echo '<tr><td>' . $blogID;
        echo '</td><td> Title: ' . $title;
        echo '</td><td>  Date: ' . $postDate;
        echo '</td><td class="post">' . $post . '</td></tr>';
    }
    echo '</tbody></table>';
    //Close database
    mysqli_close($dbc);
    
    

    
?>
</body>
</html>