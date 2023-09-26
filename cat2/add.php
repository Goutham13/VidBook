<?php

$name=$_POST['name'];
$url=$_POST['url'];

    // Connecting DB
    $conn = new mysqli('localhost', 'root','','vidbook');
    if($conn->connect_error){
        die('connection Failed : '.$conn->connect_error); 
    }else{
        $stmt = $conn->prepare("INSERT into travel(name, url) values(?,?)");
        $stmt->bind_param("ss", $name, $url);
        $stmt->execute();
        echo "________Video added________"."<br>";
        echo "___redirecting to Travel!___";
        
        header("refresh:1; url=cat2.php"); 
        exit();
        $stmt->close();
        $conn->close();
    }
?>