<?php

global $OUTPUT;

$extraclasses = array();
$bodyattributes = $OUTPUT->body_attributes($extraclasses);

$templatecontext = array(
    "output" => $OUTPUT,
    "body_attributes" => $bodyattributes
);

echo $OUTPUT->render_from_template("theme_blank/columns2", $templatecontext);