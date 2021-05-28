<?php

namespace app\controllers;

use app\models\Main;

class MainController extends AppController
{
    public function indexAction()
    {
        $model = new Main;
        $response = $model->findLike('li', 'text');
        $this->setVars(compact('response'));
    }
}