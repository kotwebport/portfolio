<?php

namespace app\controllers;

class PortfolioController extends AppController
{

	public function actionIndex()
    {
        return $this->render('index');
    }
	
	/**
		Лендинг
	*/
		
	
	public function actionLandingPage($page)
	{
				
		return $this->render('landing', [
			'page' => $page,
		]);
		
	}
	
	
}
