<?php
    session_start();
    //Start the session
    require_once('startsession.php');
    
    //Insert the page header
    $page_title = 'Improving Meditation!';
    require_once('header.php');
    
    //require_once('appvars.php');
    require_once('connectvars.php');
    
    require_once('navmenu.php');
        
    
    // Connect to the database 
    
    
   ?>
<html>
    <body>
        <p><a class="homeMenu" href="howToMeditate.php">How to Meditate</a></p>
        <p><a class="homeMenu" href="benefits.php">Benefits of Meditation</a></p>
        <img src="images/guide.PNG" class="intro"/><br/><br/>
        <img src="images/meditationTime.PNG" class="weeklySchedule"/>
        
    </body> 
</html>
<?php 
    require_once('footer.php');
?>