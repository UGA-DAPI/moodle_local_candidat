

<?php

/*//this will get called when Moodle builds the settings block.
//adds a link to the bottom of the course administration section of the settings block.
function local_candidat_extend_settings_navigation($settingsnav, $context) {
    global $CFG, $PAGE;
 
    // Only add this settings item on non-site course pages.
    if (!$PAGE->course or $PAGE->course->id == 1) {
        return;
    }
 
    // Only let users with the appropriate capability see this settings item.
    if (!has_capability('moodle/backup:backupcourse', context_course::instance($PAGE->course->id))) {
        return;
    }
 
    if ($settingnode = $settingsnav->find('courseadmin', navigation_node::TYPE_COURSE)) {
        $strfoo = get_string('candidat', 'local_candidat');
        $url = new moodle_url('/local/candidat/candidat.php', array('id' => $PAGE->course->id));
        $foonode = navigation_node::create(
            $strfoo,
            $url,
            navigation_node::NODETYPE_LEAF,
            'candidat',
            'candidat',
            new pix_icon('t/addcontact', $strfoo)
        );
        if ($PAGE->url->compare($url, URL_MATCH_BASE)) {
            $foonode->make_active();
        }
        $settingnode->add_node($foonode);
    }
}

//Removing the "candidat" link from the navigation menu
function local_candidat_extend_navigation(global_navigation $navigation) {
    if ($candidat = $navigation->find('candidat', global_navigation::TYPE_SETTING)) {
        $candidat->remove();
    }
}
*/
function local_candidat_extend_navigation_course($navigation, $course, $coursecontext) {
    $url = new moodle_url('/local/candidat/index.php');
    $devcoursenode = navigation_node::create('Development course', $url, navigation_node::TYPE_CUSTOM, 'Dev course', 'devcourse');
    $navigation->add_node($devcoursenode);
}

?>
