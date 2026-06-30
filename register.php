<?php

include 'db.php';

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];

$password = password_hash(
    $_POST['password'],
    PASSWORD_DEFAULT
);

$sql = "INSERT INTO users
(fullname,email,phone,gender,password)
VALUES
('$fullname','$email','$phone','$gender','$password')";

if($conn->query($sql) === TRUE){

    echo "
    <h2>Registration Successful!</h2>
    <a href='registration.html'>
    Register Another User
    </a>
    ";

}
else{

    echo "Error: " . $conn->error;

}

$conn->close();

?>
