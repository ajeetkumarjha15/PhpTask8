<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Task8.css">
    <title>Document</title>
</head>
<body>
<div id="main">
<div>
<a href="#">HOME</a>
<a href="Register.php">REGISTER</a>
<a href="Registration.php">LOGIN</a>
<center>
  <h1>Registration Form</h1>
  <form id = "form" class = "form" action="Registration.php" method = "POST">

    <label for="id">ID</label><br>
    <input type="number" id="id" name="id" placeholder="Your id.." ><br><br>

    <label for="fname">First Name</label><br>
    <input type="text" id="fname" name="firstname" placeholder="Your name.." required><br><br>

    <label for="lname">Last Name</label><br>
    <input type="text" id="lname" name="lastname" placeholder="Your last name.." required><br><br>

    <label for="lname">Date Of Birth</label><br>
    <input id="dob" type="date" value="bdate" name="bdate" required><br><br>

    <label for="email">EMail</label><br>
    <input type="email" id="email" name="email" placeholder="Your email id" required><br><br>

    <label for="password">Password</label><br>
    <input type="password" id="pwd" name="pwd" placeholder="Your password" required><br><br>

    <label for="mobile">Mobile No</label><br>
    <input type="number" id="mobile" name="mobile" placeholder="Your mobile number" required><br><br>

    <label for="gender">Gender</label><br>
    <select id="gender" name="gender">
      <option value="male">Male</option>
      <option value="female">Female</option>
      <option value="other">Other</option>
    </select><br><br>

    <label for="country">Country</label><br>
    <select id="country" name="country">
      <option value="india">India</option>
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select><br><br>

    <label for="city">City</label><br>
    <input type="text" id="city" name="city" placeholder="Your city name" required><br><br>

    <button type="submit" id="submit" name="submit" value="Register">Register</button>
    <button type="reset" id="reset" name="reset" value="Reset">Reset</button>
  </form>
</center>
</div>
</body>
</html>