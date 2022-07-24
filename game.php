<?php
$username = $_POST['username'];
$password = $_POST['pass'];
$db = mysqli_connect("localhost", "Zordon", "Zordon123!", "clicker");
$sql = "SELECT username FROM users WHERE username = '$username' && password = '$password'";
$clicks = "0";
$result = $db->query($sql);

if($result->num_rows > 0) {
    
    $conn = new mysqli("localhost", "Zordon", "Zordon123!", "Clicker");
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "SELECT id,username, registerdate FROM users";
    $result = $conn->query($sql);
    
    $row = $result->fetch_assoc(); 
    echo "<h1 align='center'>some info about your account</h1>";
    echo "<b><p align='center'> ID: " . $row["id"]."<b>";
    echo "</p>";
    echo "<b><p align='center'>Username: " . $row["username"]."<b>";
    echo "</p>";
    echo "<b><p align='center'>Join date " . $row["registerdate"]. "<b>";
    echo "</p>";
    
    $conn->close();
    echo "<!DOCTYPE html>";
    echo "<html lang='en'>";
    echo "<head>";
    echo "    <meta charset='UTF-8'>";
    echo "    <meta http-equiv='X-UA-Compatible' content='IE=edge'>";
    echo "    <meta name='viewport' content='width=device-width', initial-scale=1.0'>";
    echo "    <title>main game</title>";
    echo "</head>";
    echo "</form>";
    echo "</body>";
    echo "</html>";

} else {
    echo "<body bgcolor='green'>";
    echo "<h1 align='center'>Wrong Password</h1>";
    echo "</body>";
}
?>