<?php
require('core/init.php');

// Create Topic Object
$topic = new Topic;

// Get Template and Assign Vars
$template = new Template('templates/frontpage.php');

$template->topics = $topic->getAllTopics();

// Display template
echo $template;
