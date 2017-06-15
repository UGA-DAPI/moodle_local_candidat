<?php

// Required files.

require_once(__DIR__ . '/../../config.php');
//require_once('../../config.php');

// Required and optional parameters.
//$id = required_param('id', PARAM_INT);
$text = optional_param('text', '', PARAM_ALPHA);

// Setting context for the page.
$PAGE->set_context(context_system::instance());
// URL is created and then set for the page navigation.
$url = new moodle_url('/test.php');
$PAGE->set_url($url);
// Heading, headers, page layout.
$PAGE->set_heading(get_string('hello'));
$PAGE->set_pagelayout('standard');
echo $OUTPUT->header();
// Displaying basic content.
echo html_writer::tag('p', $text);
// Display the footer.
echo $OUTPUT->footer();

?>
