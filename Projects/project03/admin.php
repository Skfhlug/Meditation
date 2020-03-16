
<?php
  
    require_once('startsession.php');
    require_once('connectvars.php');
    require_once('header.php');
    require_once('navmenu.php');

?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Admin Blogging</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
  <h2>Admin</h2>
  <p>Admin can use this page to post as needed.</p>
  <hr/>
<?php
    

    $dbc = mysqli_connect('localhost' , 'root', '' , 'skfhlug')
            or die('Error connecting to MySQLserver');
                    
                    
        // Retrieve the user data from MySQL
        $query = "SELECT * FROM blog";
        $data = mysqli_query($dbc, $query);
        $result = mysqli_query($dbc, $query)
                or die('Error querying select data from database');            
        $row = mysqli_fetch_array($data);
        
        echo '<table class="table table-striped" style="margin-right: 200px;"><thead><tr><th>id</th><th>Title</th><th>Date</th><th>Post</th><th>Remove</th></tr></thead><tboby>';
      
        while ($row = mysqli_fetch_array($result)) 
        {
            $blogID = $row['blogID'];
            $title = $row['title'];
            $postDate = $row['postDate'];
            $adjustFeeling = $row['adjustFeeling'];
            $description = $row['description'];
            $benefitDescription = $row['benefitDescription'];
            $commentStatus = $row['commentStatus'];
            $masterID = $row['masterID'];
    
            
            echo '<tr><td>' . $blogID;
            echo '</td><td> Title: ' . $title;
            echo '</td><td>  Date: ' . $postDate;
            echo '</td><td class="post">' . $post;
            echo '</td><td><a href="deleteBlog.php? blogID=' . $row['blogID'].'">REMOVE</a></td></tr>';
            
        }
        echo '</tbody></table>';
        //Close database
        mysqli_close($dbc);

?>

</body> 
</html>
