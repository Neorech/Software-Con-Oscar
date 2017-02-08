<?php
// Requiring the model
require_once('model.php');
 
// Retrieving the list of posts
$posts = getAllPosts();
 
// Requiring the view
require('view.php');
?>