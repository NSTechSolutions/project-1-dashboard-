<?php

// for the heading
if (!isset($view_bag)) {
    $view_bag["title"] = 'None';
}
// ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Fundamentals:
        <?= $view_bag["title"] ?>
    </title>
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <a href="#" class="navbar-brand"> PHP Fundamentals:
                <?= $view_bag["title"] ?>
            </a>
            <a href="./" rel="noopener noreferrer">Home</a>
            <a href="./about.php" rel="noopener noreferrer">About</a>
            <!-- <button></button> -->
            <a href="./login.php" class="signin-btn"><button>LOG-IN</button></a>
        </div>
    </nav>
    <!-- <img src="images/favicon.png" alt="Favicon" height="100" width="100"> -->

    <?php

    require APP_PATH . "views/$name.view.php";
    ?>
</body>

</html>