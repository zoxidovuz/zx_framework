<?php

namespace app\controllers;

use R;
use app\models\Main;
use vendor\core\App;
use vendor\core\base\View;

class MainController extends AppController
{
    public function indexAction()
    {

        $model = new Main;
        $response = R::find('posts');
        View::setMeta('Maqolalar');
        // $response = App::$app->cache->get('posts');
        // if(!$response){
        //     $response = R::find('posts');
        //     App::$app->cache->set('posts', $response);
        // }
        $this->setVars(compact('response'));
    }

    public function testAction(){
        $model = new Main;
        if($this->isAjax()){
            $id = $_POST['id'];
            $post = R::findOne('posts', "id=$id");
            $this->loadView('test', compact('post'));
        }
    }
}