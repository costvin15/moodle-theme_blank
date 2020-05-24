<?php

// Theme's name.
$THEME->name = "blank";
// Array containing the names of the CSS stylesheets.
$THEME->sheets = array();
// Array containing the names of the CSS stylesheets to include for the TinyMCE text editor content area.
$THEME->editor_sheets = array();
$THEME->scss = function($theme) {
    theme_blank_get_main_scss_content($theme);
};
// Array containing maps to the different layout types to different layout files.
$THEME->layouts = array(
    "base" => array(
        "file" => "columns2.php",
        "regions" => array(),
    ),
    "login" => array(
        "file" => "login.php",
        "regions" => array(),
    ),
    "maintenance" => array(
        "file" => "maintenance.php",
        "regions" => array(),
    ),
);
// Defines the themes that the theme will extend.
$THEME->parents = array();
// Defines support for docking blocks.
$THEME->enable_dock = false;
// Defines a function to post process the css tree.
$THEME->csstreepostprocessor = "";
// Array containing a list of YUI css files to load.
$THEME->yuicssmodules = array();
// Defines support to customize any core renderers.
$THEME->rendererfactory = "theme_overridden_renderer_factory";
// Defines a comma separated list of block types that cannot be deleted in this theme.
$THEME->undeletableblocktypes = "";
$THEME->iconsystem = \core\output\icon_system::FONTAWESOME;
