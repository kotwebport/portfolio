<?php

use yii\db\Migration;

/**
 * Class m210813_090048_portfolio_migration
 */
class m210813_090048_portfolio_migration extends Migration
{
    
    public function safeUp()
    {
		  $this->createTable('portfolio-direction', [
            'id' => $this->primaryKey(),
            'link' => $this->string(),
			'name' => $this->string(),
		  ]);
		  
		  $this->createTable('portfolio-work', [
            'id' => $this->primaryKey(),
			'direction_id' => $this->integer(),
            'link' => $this->string(),
            'name' => $this->string(),			  
		  ]);
		
		$this->addForeignKey('direction-work-fk', 'portfolio-work', 'direction_id', 'portfolio-direction', 'id', 'CASCADE', 'CASCADE');		
		
		/**
			Направления портфолио
		*/
			$directions = [
				'landing' => 'Лендинг',
				'visiting' => 'Визитка',
				'info' => 'Инфо',
				'personal' => 'Персональный',
				'corporate' => 'Корпоративный',
				'declaration' => 'Объявления',
				'shop' => 'Магазин',
				'social' => 'Соц.сеть',
				'multimedia' => 'Мультимедиа',
				'constructor' => 'Конструктор',
				'index' => 'Главная',
			];
		
		
		/**
			Подготовка массива для заполнение таблицы portfolio-direction
		*/
		
		$i = 0;
		
		foreach($directions as $link => $name){
			$portfolioDirections[$i]['link'] = $link;
			$portfolioDirections[$i]['name'] = $name;			
			$i++;			
		}
		
		foreach($portfolioDirections as $portfolioDirection){
			//$this->insert('portfolio-direction', $portfolioDirection);	
			print_r($portfolioDirection);
		}
		
		
	
					
			
				
    }
	
	
	
	public function safeDown()
    {
		$this->dropTable('portfolio-work');
		$this->dropTable('portfolio-direction');
    }

}
