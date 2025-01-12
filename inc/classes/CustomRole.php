<?php

namespace WP_EDITOR_EXPERIENCE\inc\classes;

interface CustomRole {

    /**
     * Add role
     * Includes all logic necessary to define role and capabilities
     */
    public function add_role(): void;

    /**
     * Remove role
     * Removes the role. Generally used to reset role should capabilities need to be adjusted
     */
    public function remove_role(): void;

}