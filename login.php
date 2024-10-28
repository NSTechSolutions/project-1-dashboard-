<?php
// Where we keep our function calls
require './app/app.php';


// Contains our Headings for the site
$view_bag = [
  'title' => "Login Page",
  'heading' => "Log-in in for a Newsletter"
];

// Veiw Function
// First parameter - Which page is being viewed
// Second parameter - contains decorded php object data
view('login', $items = '');

