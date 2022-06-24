<?php
$name = $_POST['Name'];
$email = $_POST['Email'];
$comment = $_POST['Comment'];
// database connection
$conn = mysqli_connect('localhost','root','','complains'); 
// Check connection
if($conn -> connection_error){
    die('connection failed : '$conn -> connection_error);
}
else
{
    $stmt = $conn->prepare("insert into complains(name, email, comment)
    values(?,?,?)");
    $stmt-> bind_param("sss", $name,$email,$complain);
    $stmt->execute();
    echo "Complain submitted suceesfully";
    $stmt ->close();
    $conn->close();
}
 
?>