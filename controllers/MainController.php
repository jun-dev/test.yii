<?php
/**
 * Created by PhpStorm.
 * User: Mikhail
 * Date: 10.10.2017
 * Time: 16:32
 */

namespace app\controllers;


class MainController extends DefaultController
{
    public function actionMain()
    {
        return $this->render('main');
    }
}