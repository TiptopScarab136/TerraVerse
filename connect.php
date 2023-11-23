<?php
$db_server = "localhost";
$db_user = "root";
$db_pass = "password";
$db_name = "terra";
$conn = "";

// Get the current date and time
$currentDateTime = date('Y-m-d'); // Format: Year-Month-Day Hour:Minute:Second


$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$password = password_hash($_POST["password"],PASSWORD_DEFAULT);
try{
$conn = mysqli_connect($db_server,$db_user,$db_pass,$db_name);
}
catch(mysqli_sql_exception){

    echo"Could not connect!";
}
if($conn){
echo"You are connected!";
$stmt = $conn->prepare("insert into consumerlogin(firstname, lastname, email, password) values(?, ?, ?, ?)");
$stmt->bind_param("ssss", $firstname, $lastname, $email, $password);
$execval = $stmt->execute();
echo $execval;
echo "Registration successfully...";
$stmt->close();
$conn->close();
     
}
else{
echo"Could not connect!";


}
?>