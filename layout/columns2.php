<?php

global $OUTPUT, $SITE;

$sitename = format_string(
    $SITE->shortname,
    true,
    array(
        "context" => context_course::instance(SITEID),
        "escape" => false,
    ),
);
$blockshtml = $OUTPUT->blocks("side-pre");
$hasblocks = strpos($blockshtml, "data-block=") !== false;
$extraclasses = array();
$bodyattributes = $OUTPUT->body_attributes($extraclasses);

$templatecontext = array(
    "sitename" => $sitename,
    "output" => $OUTPUT,
    "sidepreblocks" => $blockshtml,
    "hasblocks" => $hasblocks,
    "body_attributes" => $bodyattributes
);

echo $OUTPUT->render_from_template("theme_blank/columns2", $templatecontext);