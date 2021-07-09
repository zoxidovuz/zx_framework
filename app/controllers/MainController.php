<?php

namespace app\controllers;

use R;
use app\models\Main;
use vendor\core\App;

class MainController extends AppController
{
    public function indexAction()
    {

        $model = new Main;
        $response = App::$app->cache->get('posts');
        if(!$response){
            $response = R::find('posts');
            App::$app->cache->set('posts', $response);
        }
        $this->setVars(compact('response'));
    }

    public function testAction(){
        if($this->isAjax()){
            $this->layout = false;
            echo 111;
        }
    }
}