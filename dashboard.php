<?php

session_start();

if(!isset($_SESSION['admin'])){
header("Location: login.php");
exit();
}

$conn = new mysqli("localhost","root","","portfolio_db");

$result = $conn->query("SELECT * FROM contacts");

?>

<h1>Admin Dashboard</h1>

<a href="logout.php">Logout</a>

<h2>Messages</h2>

<table border="1" cellpadding="10">

<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Message</th>
</tr>

<?php

while($row = $result->fetch_assoc()){

echo "<tr>";
echo "<td>".$row['id']."</td>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['email']."</td>";
echo "<td>".$row['message']."</td>";
echo "</tr>";

}

?>

</table>