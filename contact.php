<?php

$messageStatus = "";

/* VARIABLES FOR FORM FIELDS */

$name = "";
$email = "";
$message = "";

/* DATABASE CONNECTION */

$conn = new mysqli("localhost","root","","portfolio_db");

if($conn->connect_error){
die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['submit'])){

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

/* SQL INSERT */

$sql = "INSERT INTO contacts (name,email,message)
VALUES ('$name','$email','$message')";

if($conn->query($sql) === TRUE){

$messageStatus = "Message sent successfully!";

/* CLEAR FORM */

$name = "";
$email = "";
$message = "";

}else{

$messageStatus = "Error: " . $conn->error;

}

}

?>

<!DOCTYPE html>
<nav class="navbar">

<div class="logo">My Portfolio</div>

<ul class="nav-links">
<li><a href="index.php">Home</a></li>
<li><a href="about.php">About</a></li>
<li><a href="projects.php">Projects</a></li>
<li><a href="contact.php">Contact</a></li>
</ul>

</nav>
<html>
<head>
<title>Contact</title>
<link rel="stylesheet" href="style.css">
</head>

<body>
<div class="contact-container">

    <h1>Contact Me</h1>

        <form method="POST" class="contact-form">

            <div class="floating-input">
            <input type="text" name="name" required>
            <label>Name</label>
            </div>

            <div class="floating-input">
            <input type="email" name="email" required>
            <label>Email</label>
            </div>

            <div class="floating-input">
            <textarea name="message" rows="4" required></textarea>
            <label>Message</label>
            </div>

            <button type="submit" name="submit" class="send-btn">Send Message</button>

        </form>

</div>

<?php if($messageStatus != ""): ?>

    <div class="alert-success">
    ✔ <?php echo $messageStatus; ?>
    </div>

<?php endif; ?>
</body>
</html>
