<?php

namespace app\controllers;

use vendor\core\base\Controller;

class PostsController extends AppController
{
    public function indexAction()
    {
        echo "Class Posts Index method";
    }

    public function testAction()
    {
        echo "Class PostsNew::test";
    }
}