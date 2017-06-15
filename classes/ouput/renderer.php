<?php
namespace local_candidat\output;
 
defined('MOODLE_INTERNAL') || die();
 
use plugin_renderer_base;
use renderable;
 
class renderer extends plugin_renderer_base {
 
     /**
     * Defer to template.
     *
     * @param developer_course_main_page $page
     *
     * @return string html for the page
     */
    public function render_developer_course_main_page(developer_course_main_page $page) {
        $data = $page->export_for_template($this);
        return parent::render_from_template('local_candidat/candidat_main_page', $data);
    }
}
?>
