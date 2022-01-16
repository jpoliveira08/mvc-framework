<?php

namespace App\Controllers\Admin;

use Core\Controller;

/**
 * User admin controller
 *
 */
class Users extends Controller
{

    /**
     * Before filter
     *
     * @return void
     */
    protected function before(): void
    {
        // Make sure an admin user is logged in for example
        // return false;
    }

    /**
     * Show the index page
     *
     * @return void
     */
    public function indexAction(): void
    {
        echo 'User admin index';
    }
}