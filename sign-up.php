<?php
if (!empty($_POST)) {
  echo $_POST['name'];
  echo $_POST['email'];
  echo $_POST['password'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sign Up page</title>
  <!-- Un-Minified version -->
  <!-- CSS Framework-->
  <link rel="stylesheet" href="https://cdn.simplecss.org/simple.css" />
  <link rel="stylesheet" href="./css/style.css" />
</head>

<body>
  <div class="container">
    <h1>Sign up for a Newsletter</h1>
    <form action="" method="POST">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" />
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" />
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" />
      <div class="sumitbtn">
        <button type="submit" value="Submit">Submit</button>
      </div>
    </form>
  </div>
</body>

</html>