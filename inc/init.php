<?php

namespace WP_EDITOR_EXPERIENCE\inc;

use WP_EDITOR_EXPERIENCE\inc\classes\ManagePluginVersion;

add_action('init', 'WP_EDITOR_EXPERIENCE\inc\wp_editor_experience_init');
function wp_editor_experience_init(){

$plugin_version = new ManagePluginVersion(WP_EDITOR_UX__VERSION);

if(!$plugin_version->is_new_version()){
    $plugin_version->set_plugin_version();
}


}