<?php
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $message = $_POST['message'];

    $conn = new mysqli('localhost', 'root', '', 'robotron');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }
    else{
        $stmt = $conn->prepare("Insert into registration(fullName, email, number, message) values(?, ?, ?, ?");
        $stmt->bind_param("ssis",$fullName, $email, $number, $message);
        $stmt->execute();
        echo "Registration Successfully";
        $stmt->close();
        $conn->close();
    }

?>
