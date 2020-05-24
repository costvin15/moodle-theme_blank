<?php

function theme_blank_get_main_scss_content($theme) {
    global $CFG;

    $scss = "";
    $filename = !empty($theme->settings->preset) ? $theme->settings->preset : null;

    if ($filename == "default.scss") {
        $scss .= file_get_contents("$CFG->dirroot/theme/blank/scss/default.scss");
    } else if ($filename == "plain.scss") {
        $scss .= file_get_contents("$CFG->dirroot/theme/blank/scss/plain.scss");
    } else {
        $scss .= file_get_contents("$CFG->dirroot/theme/blank/scss/default.scss");
    }

    return $scss;
}