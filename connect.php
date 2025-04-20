<?php 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    // DATABASE CONNECTION
    $conn = new mysqli('localhost', 'root', '', 'cograbig');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else {
        $stmt = $conn->prepare("insert into webRegister(name, email, phone) values (?, ?, ?)");
        $stmt->bind_param("ssi", $name, $email, $phone);
        $stmt->execute();
        echo "Registration Successful...";
        $stmt->close();
        $conn->close();
    }

?>