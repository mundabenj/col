 <?php
$servername = "localhost";
$username = "root";
$password = "alex";
$dbname = "col";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// insert data into table
// $sql = "INSERT INTO users (username, email, password) VALUES 
// ('user1', 'user1@yahoo.com', 'user123'),
// ('user2', 'user2@yahoo.com', 'user123')
// ";

// if ($conn->query($sql) === TRUE) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }

$sql = "SELECT id, username, email, reg_date FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["username"]. " - Email: " . $row["email"]. " - Registered on: " . $row["reg_date"]. "<br>";
  }
} else {
  echo "0 results";
}


$conn->close();
?> 