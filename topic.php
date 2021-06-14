<?php
require('core/init.php');

// Get Template and Assign Vars
$template = new Template('templates/topic.php');

//$template->heading = "This is the projects heading";

// Display template
echo $template;
