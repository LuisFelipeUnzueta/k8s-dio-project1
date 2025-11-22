<?
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

include 'conexao.php';

$name = $_POST["userName"];
$email = $_POST["email"];
$message = $_POST["message"];

$query = "INSERT INTO messages(userName, email, message) VALUES ('$name', '$email', '$message')";
  

if ($link->query($query) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $link->error;
}
?>