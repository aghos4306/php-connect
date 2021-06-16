<?php
require('core/init.php');

// Create Topic Object
$topic = new Topic;

// Get Template and Assign Vars
$template = new Template('templates/frontpage.php');

$template->topics = $topic->getAllTopics();
$template->topics = $topic->getTotalTopics();
$template->topics = $topic->getTotalCategories();

// Display template
echo $template;
