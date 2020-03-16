<html>
    <link rel="stylesheet" type="text/css" href="style.css" />
</html>
<?php
    //Start the session
    require_once('startsession.php');
    //Insert the page header
    $page_title = 'Where opposites attract!';
    require_once('header.php');
    require_once('appvars.php');
    require_once('connectvars.php');
    
        
    //Show the navigation menu
    require('navmenu.php');
        
    $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
        or die ('Error connect DB');
        
    if (!isset($_GET['userID'])) 
    {
        $query = "SELECT * from exercise_user where userID = '".$_SESSION['userID']."'";
    }
    else 
    {
        $query ="SELECT * from exercise_user where userID = '".$_GET['userID']."'";
    }
    
    $data = mysqli_query($dbc, $query)
        or die ('Error query DB');
    
    $row = mysqli_fetch_array($data);
    mysqli_query($dbc, $query);
    
    $birthdate = $row['birthday'];
    $from = new DateTime($birthdate);
    $to   = new DateTime('today');
    $age = $from->diff($to)->y;
        
    $gender = $row['gender'];
    $weight = $row['weight'];
        
    if (isset($_POST['submit'])) 
    {
        $user_id = $_SESSION['userID'];
        $type = mysqli_real_escape_string($dbc, trim($_POST['type']));
        $time_in_minute = mysqli_real_escape_string($dbc, trim($_POST['time_in_minute']));
        $heartrate = mysqli_real_escape_string($dbc, trim($_POST['heartrate']));
        $date = mysqli_real_escape_string($dbc, trim($_POST['date']));
        $city = mysqli_real_escape_string($dbc, trim($_POST['city']));
        
        
        //$calories = $heartrate*$time_in_minute;
        echo '<p>gender'.$gender.'</p>';
        echo '<p>age'.$age.'</p>';
        echo '<p>weight: '.$row['weight'].'</p>';
        echo '<p>heartrate'.$heartrate.'</p>';
        echo '<p>time in minute'.$time_in_minute.'</p>';
        
        if (is_numeric($heartrate))
        {
            if (is_numeric($time_in_minute))
            {
                if ($gender == 'M')
                {
                    $calories = ((-55.0969 + (0.6309 * $heartrate) + (0.090174 * $weight) + (0.2017 * $age)) / 4.184) * $time_in_minute;
                }
                else if ($gender == 'F')
                {
                    $calories = ((-20.4022 + (0.4472 * $heartrate) - (0.057288 * $weight) + (0.074 * $age)) / 4.184) * $time_in_minute;
                }
                //echo '<p> You burned ' .$calories .'calories. Your age is'.$age.' Your weight is '.$weight.'</p>';
                
                $error = false;
                //Update the profile data in the database
                $query = "INSERT INTO exercise_log VALUES (0, '".$_SESSION['userID']."', '$date', '$type', '$time_in_minute', '$heartrate', '$calories')";
                mysqli_query($dbc, $query)
                    or die ('Error die query insert data to exercise_log DB');
                
                echo '<table class = "table3"> ';
                echo '<tr><th>UserID</th><th>Date</th><th>Type</th><th>Hearth rate</th><th>Time in minute</th><th>Calories</th></tr>';
                echo '<td>'.$user_id.'</td><td>'.$date.'</td><td>'.$type.'</td><td>'.$heartrate.'</td><td>'.$time_in_minute.'</td><td>'.$calories.'</td>';
                
                
                echo '<p> Your exercise log was calculated</p>';
                
                mysqli_close($dbc);
                exit();
            }
            else
            {
                echo ('<p class="Enumber">Please Enter only number for the time</p>');
            }
        }
        else
        {
            echo ('<p class="Enumber">Please Enter only number for the heartrate</p>');
        }
    }

    /*else
    {
        echo '<p class="error">Your exercise_log does not work, please contact programmer team.</p>';
    }*/

    mysqli_close($dbc);
 ?>
<html>
    <body>
        <p>Please enter your exercise information.</p>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <fieldset>
                    <legend>Exercise Info</legend>
                    <label for="date">Date:</label>
                    <input type="date" id="date" name="date" value="<?php if (!empty($date)) echo $date; ?>" /><br />
                    <label for="Type">Type:</label>
                        <select id="type" name="type">
                            <option value="Yoga" <?php if (!empty($type) && $type == 'Yoga') echo 'selected = "selected"'; ?>>Yoga</option>
                            <option value="Running" <?php if (!empty($type) && $type == 'Running') echo 'selected = "selected"'; ?>>Running</option>
                            <option value="Biking" <?php if (!empty($type) && $type == 'Biking') echo 'selected = "selected"'; ?>>Biking</option>
                            <option value="Hiking" <?php if (!empty($type) && $type == 'Hiking') echo 'selected = "selected"'; ?>>Hiking</option>
                            <option value="Swim" <?php if (!empty($type) && $type == 'Swimming') echo 'selected = "selected"'; ?>>Swimming</option>
                            <option value="Weightlifiting" <?php if (!empty($type) && $type == 'Weightlifiting') echo 'selected = "selected"'; ?>>Weightlifiting</option>
                        </select><br />
                    <label for="time_in_minute">Time in minute:</label>
                    <input type="text" id="time_in_minute" name="time_in_minute" value="<?php if (!empty($time_in_minute)) echo $time_in_minute; ?>" /><br />
                    <label for="heartrate">Heartrate:</label>
                    <input type="heartrate" id="heartrate" name="heartrate" value="<?php if (!empty($heartrate)) echo $heartrate; ?>" /><br />
                </fieldset>
        <input type="submit" value="submit" name="submit" />
    </form>
</body> 
</html>