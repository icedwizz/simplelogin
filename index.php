<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);


include 'dbh.php';
?>
<h1>Simple SignUp Form</h1>

<form method="post" action="signup.php">
  <label for="firstname">First Name</label>
  <input type="text" name="firstname" id="firstname">
  <label for="lastname">Last Name</label>
  <input type="text" name="lastname" id="lastname">
  <label for="email">Email</label>
  <input type="email" name="email" id="email">
  <label for="password">Password</label>
  <input type="password" name="password" id="password">
  <input type="submit" name="submit" value="submit">
</form>
