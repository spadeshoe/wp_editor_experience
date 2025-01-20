<?php

namespace WP_EDITOR_EXPERIENCE\inc;

use WP_EDITOR_EXPERIENCE\inc\classes\ManagePluginVersion;

function wp_editor_experience_activate(){

    $plugin_version = new ManagePluginVersion(WP_EDITOR_UX__VERSION);
    $plugin_version->set_plugin_version();


}