<?php

namespace app\controllers;

use vendor\core\base\Controller;

class PageController extends AppController
{
    public function viewAction()
    {
        debug($this->route);
        echo "Page view action";
    }
}