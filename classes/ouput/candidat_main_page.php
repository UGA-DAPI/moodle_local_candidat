<?php
namespace local_candidat\output;
defined('MOODLE_INTERNAL') || die();
 
use renderable;
use renderer_base;
use templatable;
use stdClass;
 
 
class developer_course_main_page implements renderable, templatable {
 
   protected $comment;
 
    /**
     * Construct this renderable.
     * @param int $courseid The course record for this page.
     */
    public function __construct($comment) {
        $this->comment = $comment;
    }
 
    /**
     * Export this data so it can be used as the context for a mustache template.
     *
     * @param renderer_base $output Renderer base.
     * @return stdClass
     */
    public function export_for_template(renderer_base $output) {
        $data = new stdClass();
        $data->comment = $this->comment;
        return $data;
    }
}
?>
