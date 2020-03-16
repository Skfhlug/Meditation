
<?php
    //Start the session
    require_once('startsession.php');
    require_once('header.php');
    require_once('appvars.php');
    //Connect DB
    require_once('connectvars.php');
    require_once('navmenu.php');
    
    //Connect to the database
    $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
     or die ('Error connect DB');


    //Show Profile information
    if (!isset($_GET['userID'])) 
    {
        $query = "SELECT * FROM exercise_user where userID = '" . $_SESSION['userID'] . "'";
    }
    else 
    {
        $query = "SELECT * FROM exercise_user WHERE userID = '" . $_GET['userID'] . "'";
    }    
    
    $data = mysqli_query($dbc, $query)
            or die ('Error query DB');
    if (mysqli_num_rows($data) == 1) 
    {
        // The user row was found so display the user data
        $row = mysqli_fetch_array($data);
        echo '<br/><table class="table1">';
        echo '<tr><td class="label">UserID:</td><td>' . $row['userID'] . '</td></tr>';
        if (!empty($row['first_name'])) 
        {
            echo '<tr><td class="label">First name:</td><td>' . $row['first_name'] . '</td></tr>';
        }
        if (!empty($row['last_name'])) 
        {
            echo '<tr><td class="label">Last name:</td><td>' . $row['last_name'] . '</td></tr>';
        }
        if (!empty($row['gender'])) 
        {
            echo '<tr><td class="label">Gender:</td><td>';
            if ($row['gender'] == 'M') 
            {
            echo 'Male';
            }
            else if ($row['gender'] == 'F') 
            {
                echo 'Female';
            }
            else 
            {
                echo '?';
            }
            echo '</td></tr>';
        }
        if (!empty($row['birthday'])) 
        {
            echo '<tr><td class="label">Birthday:</td><td>' . $row['birthday'] . '</td></tr>';
        }
        if (!empty($row['weight'])) 
        {
            echo '<tr><td class="label">weight:</td><td>' . $row['weight'] . '</td></tr>';
        }
        if (!empty($row['picture'])) 
        {
            echo '<tr><td class="label">Picture:</td><td><img src="' . MM_UPLOADPATH . $row['picture'] .
            '" alt="Profile Picture" /></td></tr>';
        }
    }
    else
    {
        echo '<p class = "error"> There was a problem accessing your profile.';
    }
    
    //-----------------------------------------------------------------
    //Show Profile information

    
    if (!isset($_GET['userID'])) 
    {
        $query = "SELECT * FROM exercise_log where user_id = '" . $_SESSION['userID'] . "'";
    }
    else 
    {
        $query = "SELECT * FROM exercise_log WHERE user_id = '" . $_GET['userID'] . "'";
    }    
    
    $data = mysqli_query($dbc, $query)
            or die ('Error query DB');
            

    if (mysqli_num_rows($data) > 0) 
    {
        $row = mysqli_fetch_array($data);
        $result = $dbc->query($query);
        echo '<table class = "table2">';
        echo '<tr><th>Log ID</th><th>UserID</th><th>Date</th><th>Type</th><th>Time in minute</th>'.
            '<th>Hearth rate</th><th>Calories</th><th>Delete</th></tr>';
        
        while($row = $result->fetch_assoc())
        {
            if (!empty($row['id']))
            {
                echo '<td class="td2">' . $row['id']. '</td>';
            }
            if (!empty($row['user_id']))
            {
                echo '<td class="td2">' . $row['user_id']. '</td>';
            }
            if (!empty($row['date']))
            {
                echo '<td class="td2">' . $row['date']. '</td>';
            }
            if (!empty($row['type']))
            {
                echo '<td class="td2">' . $row['type']. '</td>';
            }        
            if (!empty($row['time_in_minute']))
            {
                echo '<td class="td2">' . $row['time_in_minute']. '</td>';
            }   
            if (!empty($row['heartrate']))
            {
                echo '<td class="td2">' . $row['heartrate']. '</td>';
            }  
            if (!empty($row['calories']))
            {
                echo '<td class="td2">' . $row['calories']. '</td>';
            }  
            if (!empty($row['id']))
            {
                echo '<td class="td2"><a href="delete.php? id=' . $row['id'].'">Delete</a></td></tr>';
      
            }

        }
    }
    else
    {
        echo '<p class = "error"> There was a problem accessing'.
            'your exercise_log.';
    }

    mysqli_close($dbc);
?>