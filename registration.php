<?php
// database name: registration-form 
// table name: registration

$Name = $_POST['name'];
$Email = $_POST['email'];
$Phonenum = $_POST['number'];
$PhyAddress = $_POST['address'];
$Password = $_POST['password'];

$conn = new mysqli('localhost','root', '','registration-form'); 
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else{
  $stmt = $conn->prepare("INSERT INTO registration(Name, Email, Phonenum, PhyAddress, Password) VALUES(?,?,?,?,?)");
  $stmt->bind_param("sssss", $Name, $Email, $Phonenum, $PhyAddress, $Password);
  $stmt->execute();
  echo "registration successful!!!";
  $stmt->close();
  $conn->close();

}
?>
