<?php

class theme_blank_admin_settingspage_tabs extends admin_settingpage {
    protected $tabs = array();

    public function add_tab(admin_settingpage $tab) {
        foreach ($tab->settings as $setting) {
            $this->settings->{$setting->name} = $setting;
        }

        $this->tabs[] = $tab;
        return true;
    }

    public function add($tab) {
        return $this->add_tab($tab);
    }

    public function get_tabs() {
        return $this->tabs;
    }

    public function output_html() {
        global $OUTPUT;

        $activetab = optional_param("activetab", "", PARAM_TEXT);
        $context = array("tabs" => array());
        $havesetactive = false;

        foreach ($this->get_tabs() as $tab) {
            $active = false;

            if (empty($activetab) && !$havesetactive) {
                $active = true;
                $havesetactive = true;
            } else if ($activetab === $tab->name) {
                $active = true;
            }

            $context["tabs"][] = array(
                "name" => $tab->name,
                "displayname" => $tab->visiblename,
                "html" => $tab->output_html(),
                "active" => $active,
            );
        }

        if (empty($context["tabs"])) {
            return "";
        }

        return $OUTPUT->render_from_template("theme_blank/admin_setting_tabs", $context);
    }
}
