<?php

use yii\db\Migration;

/**
 * Class m210813_090048_portfolio_migration
 */
class m210813_090048_portfolio_migration extends Migration
{

    public function safeUp()
    {

        $this->createTable('navigation_direction', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
        ]);

        $this->createTable('navigation_work', [
            'id' => $this->primaryKey(),
            'direction_id' => $this->integer(),
            'link' => $this->string(),
            'name' => $this->string(),
        ]);


        $this->addForeignKey('direction-work-fk', 'navigation_work', 'direction_id', 'navigation_direction', 'id', 'CASCADE', 'CASCADE');

        $directions = [
            'Лендинг',
            'Визитка',
            'Инфо',
            'Персональный',
            'Корпоративный',
            'Объявления',
            'Магазин',
            'Соц.сеть',
            'Мультимедиа',
        ];

        /**
         * Подготовка массива для заполнение таблицы navigation_direction
         */

        foreach ($directions as $direction) {
            $insertDirections[]['name'] = $direction;
        }
        foreach ($insertDirections as $insertDirection) {
            $this->insert('navigation_direction', $insertDirection);
        }

    }


    public function safeDown()
    {
        $this->dropTable('navigation_work');
        $this->dropTable('navigation_direction');
    }

}
