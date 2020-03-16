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

    if (isset($_POST['submit'])) 
    {
        $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
            or die('Error connecting to MySQLserver');
        
        $username = $_SESSION['username'];
        $title = mysqli_real_escape_string($dbc, trim($_POST['title']));
        $totalTime = mysqli_real_escape_string($dbc, trim($_POST['totalTime']));
        $adjustFeeling = $_POST['adjustFeeling'];
        $benefitDescription = mysqli_real_escape_string($dbc, trim($_POST['benefitDescription']));
        $description = mysqli_real_escape_string($dbc, trim($_POST['description']));
        
        if ($_POST['adjustFeeling'] == 'y') 
        {
        //Connect to Database
        
            
        // Write the data to the database
        $query = "INSERT INTO blog (blogId, title, totalTime, adjustFeeling, description, benefitDescription, postDate, username)".
            " VALUES (0, '$title', '$totalTime', 'y', '$description', '$benefitDescription', NOW(), '$username');";
        //echo "$query";
        mysqli_query($dbc, $query)
            or die('Error querying INSERT database');
        
        //Close databas
        mysqli_close($dbc);
        $home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/index.php';
        //echo '<p>Your blog has been successfully upload. Would you like to <a href="meditationDiary.php">Meditation Blog</a>?</p>';
        }
        if ($_POST['adjustFeeling'] == 'n') 
        {
        //Connect to Database
        
            
        // Write the data to the database
        $query = "INSERT INTO blog (blogId, title, totalTime, adjustFeeling, description, benefitDescription, postDate, username)".
            " VALUES (0, '$title', '$totalTime', 'n', '$description','$benefitDescription', NOW(), '$username');";

        mysqli_query($dbc, $query)
            or die('Error querying INSERT database');
        
        //Close databas
        mysqli_close($dbc);
        $home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/index.php';
        
        }
        echo '<p class="goBack">Your blog has been successfully upload. <a href="meditationDiary.php">Click here to return to the Meditation Blog</a>?</p>';
    }
?>
    
    
    <form class="form-group" action="createMeditationBlog.php" method="post">
    
        <label for="exampleFormControlInput1">Title: </label><br>
        <input type="text" class="form-control" name="title" value="Title">
        <br>
        
        <label for="exampleFormControlTextarea1">Total Meditation Time (Minute): </label><br/>
        <input style="width:50px" type="text" class="form-control" name="totalTime" value="10">
        <br/>
                
        <label for="exampleFormControlTextarea1">Did you adjust your feeling before started meditate? </label><br/>
        <input type="radio" name="adjustFeeling" value="y" checked="checked"> Yes, I adjusted my mind before start meditation<br>
        <input type="radio" name="adjustFeeling" value="n"> No, I did not adjust my mind before start meditation<br>
        <br/>
        
        <label for="exampleFormControlTextarea1">Describe your meditation experience: </label><br/>
        <textarea class="form-control" name="description" rows="3" value="Description your experiences"></textarea>
        <br/>

        <label for="exampleFormControlTextarea1">Results: </label><br/>
        <textarea class="form-control" name="benefitDescription" rows="3" value="Sleep better"></textarea>
        <br/>
        <input type="submit" value="Submit" name="submit"><br/>
    </form> 
    <?php 
    require_once('footer.php');
?>