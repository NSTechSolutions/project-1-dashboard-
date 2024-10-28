<?php
// Where we keep our function calls
require './app/app.php';


// Contains our Headings for the site
$view_bag = [
  'title' => "Signup",
  'heading' => ""
];


// Heading
$view_bag['heading'] = 'Create an account ';

view('signup', $items = '');