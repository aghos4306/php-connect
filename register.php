<?php
require('core/init.php');

// Get Template and Assign Vars
$template = new Template('templates/register.php');

$template->heading = "This is the projects heading";

// Display template
echo $template;
