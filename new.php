<?php
    $serverName = "127.0.0.1";

    $userName = "sqluser";
    
    $password = "";
    
    $dbName = "notes";
    $conn = new mysqli($serverName,
    $userName, $password, $dbName);


// Create connection
$conn = new mysqli($serverName, $userName, $password, $dbName);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
    
   /* try{
        $con= new PDO("mysql:host=$serverName;dbname=$dbName",$userName,$password);
        $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
      //  echo "Connection Success";
    }
    catch(PDOException $e){
        echo "Error in connection ". $e->getMessage();
    }*/
    




    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $title=$_POST['title'];
        $content=$_POST['content'];
        $important=$_POST['important'];
       
        $sql = mysql_query("INSERT INTO notes(title,content,important) VALUES ('$title',
        '$content,'$important')");
       // echo $sql;
    }
   
        
    




   // mysql_close($conn);   
     
   $conn->close();
   

?>




<!DOCTYPE html>
<html>
    <head>
        <title>Notes App</title>
        <link rel="stylesheet" href="styles/style.css">
    </head>
    <header>
                Notes App
    </header>

    <div class="titleDiv">
            <div class="backLink"><a class="nav-link" href="index.php"> Home</a></div>
            <div class="head">New Note</div>
    </div>
    <form action="new.php" method="post">     

            <span class="label">Title</span>
            <input type="text" name="title" />
            
            <span class="label">Content</span>
            <textarea name="content"> </textarea>

            <div class="chkgroup">
                <span class="label-in">Important</span>
                <input type="hidden" name="important" value="0" />
                <input type="checkbox" name="important" value="1" />
            </div>
            
        <input type="submit" />

</html>

