<?php
// Where we keep our function calls
require './app/app.php';


// Contains our Headings for the site
$view_bag = [
    'title' => "NSTechSolutions Home",
    'heading' => "NS TechSolutions Newsletter"
];


// Heading
// $view_bag['heading'] = 'Search results for ' . $search;



// View Function
// First parameter - Which page is being viewed
// Second parameter - contains decorded php object data
view('index', $items = '');

