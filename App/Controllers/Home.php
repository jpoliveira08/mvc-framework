<?php

namespace App\Controllers;

use Core\Controller;
use Core\View;

/**
 * Home controller
 * 
 */
class Home extends Controller
{
    /**
     * Before filter
     *
     * @return void
     */
    protected function before(): void
    {
        //echo "(before) ";
        //return false;
    }

    /**
     * After filter
     *
     * @return void
     */
    protected function after(): void
    {
        //echo " (after)";
    }

    /**
     * Show the index page
     *
     * @return void
     */
    public function indexAction(): void
    {
        View::renderTemplate('Home/index.html', [
            'name' => 'Dave',
            'colours' => ['red', 'green', 'blue']
        ]);
    }
}
