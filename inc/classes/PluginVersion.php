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
    public function set_plugin_version(): void{

        if(current_user_can('manage_options')){

            update_option($this->plugin_version_option_slug, $this->plugin_version);

        }

    }

    /**
     * Get the plugin version from the options table
     * 
     * @return string $plugin_option - string from options table or empty string if no option value returned
     * 
     */
    public function get_plugin_version(): string{

        $plugin_option = get_option($this->plugin_version_option_slug, '');

        return $plugin_option;
    }

    /**
     * Check if the plugin version matches that set in the options table
     * 
     * @return bool true/false - compares option value set via WP_EDITOR_UX__VERSION constant with value set in the options table. Returns true if values match, false otherwise.
     */
    public function is_new_version(): bool{

        if($this->get_plugin_version() == $this->plugin_version){
            return true;
        }

        return false;

    }

}