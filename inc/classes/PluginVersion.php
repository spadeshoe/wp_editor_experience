<?php

namespace WP_EDITOR_EXPERIENCE\inc\classes;

/**
 * 
 * Manage the plugin version in the options table and other helpful utilities
 * 
 */
class ManagePluginVersion {

    private $plugin_version = '';
    private $plugin_version_option_slug = 'wp-editor-ux-plugin-version';

    /**
     * Set the plugin version property from constant
     */
    public function __construct($plugin_version = WP_EDITOR_UX__VERSION)
    {
        $this->plugin_version = $plugin_version;
    }

    /**
     * Set the plugin version to the options table
     */
    public function set_plugin_version(){

    }

    /**
     * Get the plugin version from the options table
     */
    public function get_plugin_version(){

    }

    /**
     * Check if the plugin version matches that set in the options table
     */
    public function is_new_version(){

    }

}