<?php

var_dump($_POST);
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
    <h1>Sign in for a Newsletter</h1>
    <form action="" method="POST">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" />
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" />
      <div class="sumitbtn">
        <input type="button" value="Submit" />
      </div>
    </form>
  </div>
</body>

</html>