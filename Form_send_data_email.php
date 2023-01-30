<!-- This code is working for Form_send_data_email.html with user login database  -->


<?php

// selectors the variables
// if(isset($_POST['submit']))
// {
// $name =   $_POST['name'];
// $email =  $_POST['email'];
// $password =  $_POST['password'];
// $phone =  $_POST['phone'];

// $sql= "insert into user(Name, email, Password, phone_No)
// values($Name , $email ,$Password,$phone_No)";

// if(mysqli_query($conn,$sql))
// {
//     echo "Succesfully submited";
// }
// else
// {
//     echo "error:".mysqli_error($conn);
// }
// mysqli_close($conn);
// }


// connect to the databases another method
$server = "localhost";
$username = "root";
$password = "";
$db = "user login";

$conn =  mysqli_connect('localhost', 'root', '', 'user login');
if ($conn) {
    echo "connection succefull";
} else {
    echo "try again to regester";
}

// take data in the dbs
$name =   $_POST['name'];
$email =  $_POST['email'];
$password =  $_POST['password'];
$phone =  $_POST['phone'];

$sql = "INSERT INTO `users` (`Name`, `email`, `Password`, `phone`) VALUES ('$name', '$email', '$password', '$phone');";
$result = mysqli_query($conn, $sql);

// if ($conn->connect_error) {
// die ( 'connection failed :' .$conn->connect_error);
// }
// else {
// $data = $conn -> prepare("INSERT INTO `user` (`Name`, `email`, `Password`, `phone No`) VALUES ('Name', 'email', 'Password', 'phone No');");
// $stmt =$conn ->prepare("insert into regestration(name, email, password,phone) values( ?, ? , ?, ?)");
// $stmt-> bind_param("sssi", $name, $password, $email, $phone);
// $stmt-> execute();
// echo " REgestration successfule";
// $stmt-> close();
// $conn->close();
// }

?>