<?php
// Creating components for code which we re-use many times

// Redirecting to a specified url
function redirect($url)
{
    header("Location: $url");
    die(); // exit
}

//Checking Methords
// Checking Submit method
function is_post()
{
    return $_SERVER['REQUEST_METHOD'] === 'POST';
}

function is_get()
{
    return $_SERVER['REQUEST_METHOD'] === 'GET';
}
// Sanitize Function
function sanitize($value)
{ // trim is used to white space in string
    $temp = filter_var(trim($value), FILTER_UNSAFE_RAW);
    // Its will retun a filliter value or false if it failed
    if ($temp === false) {
        return '';
    }

    return $temp;
}

// Session Functions 


// Fuction to authenticate users
function authenticate_user($email, $password)
{
    // Getts users array
    $users = CONFIG['users'];


    // checking if the email is the same as the on on the list
    if (!isset($users[$email])) {
        return false;
    }

    $user_password = $users[$email];

    // checking if the password is the same as the on on the list
    return $password == $user_password;

    // return $email == USER_NAME && $password == PASSWORD;
}

// Functions to redirect to other web pages, insted of using the header every time we redirect


function is_user_authenticated()
{
    //check if the current session contains the stored session email is true
    return isset($_SESSION['email']);

}

// Checks if the user is logged in before displaying any infomation, if its false it will redirect the back to the log in page
function ensure_user_is_authenticated()
{
    if (!is_user_authenticated()) {
        redirect('../login.php');
        die();
    }
}

// View layout
function view($name, $model = '')
{
    // All this code is with in the scope of this function
    global $view_bag;

    // $model for the scope of our varibles 
    // Will add the layou structer
    require APP_PATH . 'views/layout.php';
}

