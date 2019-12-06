<?php

namespace App\Controllers;

use \Core\View;

/**
 * Home controller
 *
 * PHP version 7.0
 */
class Bot extends \Core\Controller
{

    /**
     * Show the index page
     *
     * @return void
     */
    public function indexAction()
    {
        View::renderTemplate('Panel/bot/index.html');
    }

     public function createAction()
    {
        View::renderTemplate('Panel/bot/create.html');
    }

}
