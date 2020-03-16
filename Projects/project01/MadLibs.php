<html lang="en">
<head>
    <title>MadLips</title>
</head>
    <body style="background-color: #ffe6e6;padding: 25px 50px 75px 100px;border: 5px solid #fb6a6a; margin: 40px;">
    <h2 style="color:#ff6666;">Enjoy the MadLips by SUPARIN</h2>
        <form action="MadLibs.php" method="post">
            <label style="color:#ff6666;" for="subject">Enter a noun:</label>
            <input type="text" id="noun" name="noun" /><br /><br />
            <label style="color:#ff6666;" for="subject">Enter a verb:</label>
            <input type="text" id="verb" name="verb" /><br /><br />
            <label style="color:#ff6666;" for="subject">Enter a adverb:</label>
            <input type="text" id="adverb" name="adverb" /><br /><br />
            <label style="color:#ff6666;" for="subject">Enter a adjective:</label>
            <input type="text" id="adjective" name="adjective" /><br /><br />
            <input type="submit" value="submit" name="submit" />
        </form>
<?php

    if (isset($_POST['submit'])) {
        //Getting words from user
        $noun = $_POST['noun'];
        $verb = $_POST['verb'];
        $adverb = $_POST['adverb'];
        $adjective = $_POST['adjective'];
        
        //Insert madlib story into DB
        $dbc = mysqli_connect('localhost' , 'root', '' , 'skfhlug')
                or die('Error connecting to MySQLserver');
                
        $query = "INSERT INTO MadLibs(noun, verb, adverb, adjective)".
                "VALUES ('$noun','$verb','$adverb','$adjective')";
            
        mysqli_query($dbc, $query)
                or die('Error querying INSERT database');
            
        //Select previous input from data base
        $query = "SELECT * FROM MadLibs";
        $result = mysqli_query($dbc, $query)
                or die('Error querying select data from database');
        
        //Display current answer sentence and word that user enter
        echo '<br /> Here is your ANSWER... hahaha ...<br />';
        echo 'You ' . $verb;
        echo ' ' . $adverb;
        echo ' like  a(n) ' . $adjective;
        echo ' ' . $noun;
        echo '. <br /><br />How funny is that?<br />';
        echo '-----------------------------------------';
        
        while ($row = mysqli_fetch_array($result)) 
        {
            $noun = $row['noun'];
            $verb = $row['verb'];
            $adverb = $row['adverb'];
            $adverb = $row['adjective'];
    
            echo '<br />You ' . $adverb;
            echo ' ' . $verb;
            echo ' like  a(n) ' . $adjective;
            echo ' ' . $noun . '. <br />';
        
        }
        //Close database
        mysqli_close($dbc);
    }

?>
    </body>
</html>