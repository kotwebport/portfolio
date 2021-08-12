<?php

namespace app\controllers;

class PortfolioController extends AppController
{	
	
	public function actionIndex()
    {
        return $this->render('index');
    }
	
	/**	Лендинг	*/		
	
	public function actionLanding()
	{
				
		return $this->render('landing', [
		]);
		
	}
	
	/**	Визитка	*/		
	
	public function actionVisiting()
	{
				
		return $this->render('visiting', [
		]);
		
	}
	
	/**	Инфо */		
	
	public function actionInfo()
	{
				
		return $this->render('info', [
		]);
		
	}
			
	/**	Персональный */		
	
	public function actionPersonal()
	{
				
		return $this->render('personal', [
		]);
		
	}
	
	/**	Корпоративный	*/		
	
	public function actionCorporate()
	{
				
		return $this->render('corporate', [
		]);
		
	}
	
	/**	Объявление */		
	
	public function actionDeclaration()
	{
				
		return $this->render('declaration', [
		]);
		
		
	}
		
	/**	Магазин	*/		
	
	public function actionShop()
	{
				
		return $this->render('shop', [
		]);
		
	}
	
	/**	Соц.сеть */		
	
	public function actionSocial()
	{
				
		return $this->render('social', [
		]);
		
	}
	
	/**	Мультимедиа	 */		
	
	public function actionMultimedia()
	{
				
		return $this->render('multimedia', [
		]);
		
	}
	
	/**	Конструктор	*/		
	
	public function actionConstructor()
	{
				
		return $this->render('constructor', [
		]);
		
	}
	
}
