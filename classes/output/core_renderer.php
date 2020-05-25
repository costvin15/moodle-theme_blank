<?php

namespace theme_blank\output;

class core_renderer extends \core_renderer {
    public function site_logo() {
        global $OUTPUT;

        $image = $OUTPUT->image_url("logo-white", "theme");

        return (string) $image;
    }

    public function profile_picture() {
        global $USER, $PAGE;

        $userpicture = new \user_picture($USER);
        $userpicture->size = 1;

        return $userpicture->get_url($PAGE);
    }
}