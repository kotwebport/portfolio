<?php

namespace app\controllers;

class PortfolioController extends AppController
{

    public function actionIndex()
    {
        return $this->render('index');
    }
}
