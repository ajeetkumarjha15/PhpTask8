<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Cedcoss";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // sql to create table
  /*
  $sql = "CREATE TABLE Registration_Table (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  firstname VARCHAR(30) NOT NULL,
  lastname VARCHAR(30) NOT NULL,
  DateOfBirth date NOT NULL,
  email VARCHAR(50) NOT NULL,
  mobile_no VARCHAR(50) NOT NULL,
  gender VARCHAR(50) NOT NULL,
  country VARCHAR(50) NOT NULL,
  city VARCHAR(50) NOT NULL
  )";

$conn->exec($sql);
echo "Table Registration_Table created successfully";
} catch(PDOException $e) {
echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
*/

$ID = $_POST['id'];
$firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];
$dateOfBirth = $_POST['bdate'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];
$gender = $_POST['gender'];
$mobile = $_POST['mobile'];
$country = $_POST['country'];
$city = $_POST['city'];

$sql = "INSERT INTO Registration_Table (id, firstname, lastname, DateOfBirth, email, password, mobile_no, gender, country, city)
VALUES ('$ID', '$firstName', '$lastName', '$dateOfBirth', '$email', '$pwd', '$gender', '$mobile', '$country', '$city')";

// use exec() because no results are returned
$conn->exec($sql);
  echo "<h1> Registration sucessful, You can Login Now</h1>";
} 
catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }

$conn = null;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Task8.css">
    <title>Document</title>
</head>
<body>
<div>

<center>
  <h1>Login Form</h1>
  <form id = "form" class = "form" action="Validation.php" method = "POST">

    <label for="email">EMail</label><br>
    <input type="email" id="email" name="email" placeholder="Your email id" required><br><br>

    <label for="password">Password</label><br>
    <input type="password" id="pwd" name="pwd" placeholder="Your password" required><br><br>

    <button type="submit" id="submit" name="submit" value="Login">Login</button>
</form>
</center>
</div>
</body>
</html>

