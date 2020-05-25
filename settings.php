<?php

if ($ADMIN->fulltree) {
    $settings = new theme_blank_admin_settingspage_tabs("themesettingblank", get_string("configtitle", "theme_blank"));
    $page = new admin_settingpage("theme_blank_general", get_string("generalsettings", "theme_blank"));

    $name = "theme_blank/preset";
    $title = get_string("preset", "theme_blank");
    $description = get_string("preset_desc", "theme_blank");
    $default = "default.scss";

    $choices = array();
    $choices["default.scss"] = "default.scss";
    $choices["plain.scss"] = "plain.scss";

    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback("theme_reset_all_caches");
    $page->add($setting);

    $settings->add($page);
}