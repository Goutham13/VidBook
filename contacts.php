<?php

$name=$_POST['Name'];
$email=$_POST['Email'];
$phone=$_POST['Phone'];

    // Connecting DB
    $conn = new mysqli('localhost', 'root','','vidbook');
    if($conn->connect_error){
        die('connection Failed : '.$conn->connect_error); 
    }else{
        $stmt = $conn->prepare("INSERT into contacts(Name, Email, Phone) values(?,?,?)");
        $stmt->bind_param("ssi", $name, $email, $phone);
        $stmt->execute();
        echo "Data Saved..."."<br>";
        echo "redirecting to Home Page.....";
        
        header("refresh:3; url=index.html"); 
        exit();
        $stmt->close();
        $conn->close();
    }
?>