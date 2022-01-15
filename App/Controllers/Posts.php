<?php

namespace App\Controllers;

use Core\Controller;
use Core\View;
use App\Models\Post;

/**
 * Posts controller
 */
class Posts extends Controller
{
    /**
     * Show the index page
     *
     * @return void
     */
    public function indexAction(): void
    {
        $posts = Post::getAll();
        //echo "Hello from the index action in the Posts controller";
        View::renderTemplate('Posts/index.html', [
            'posts' => $posts
        ]);
    }

    /**
     * Show the add new page
     *
     * @return void
     */
    public function addNewAction(): void
    {
        echo "Helloo from the addNew action in the Posts controller!";
    }

    public function editAction()
    {
        echo 'Hello from the edit action in the Posts controller!';
        echo '<p>Route parameters <pre>' . htmlspecialchars(print_r($this->route_params, true)) . '</pre></p>';
    }
}