<?php

session_start();

$conn = new mysqli("localhost","root","","portfolio_db");

if(isset($_POST['login'])){

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM admins WHERE username='$username' AND password='$password'";

$result = $conn->query($sql);

if($result->num_rows > 0){
$_SESSION['admin'] = $username;
header("Location: dashboard.php");
}else{
$error = "Invalid login!";
}

}

?>

<h2>Admin Login</h2>

<form method="POST">

<input type="text" name="username" placeholder="Username"><br><br>

<input type="password" name="password" placeholder="Password"><br><br>

<button name="login">Login</button>

<?php if(isset($error)) echo $error; ?>

</form>