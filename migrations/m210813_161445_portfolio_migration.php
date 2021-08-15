<?php

use yii\db\Migration;

/**
 * Class m210813_161445_portfolio_migration
 */
class m210813_161445_portfolio_migration extends Migration
{

    public function safeUp()
    {
        /**
         * База для навигации (будет медленно изменяться в процессе развития портфолио)
         */
        $this->insert('navigation_work', ['direction_id' => '1', 'link' => 'landing', 'name' => 'Лендинг-1']);
        $this->insert('navigation_work', ['direction_id' => '1', 'link' => 'landing', 'name' => 'Лендинг-2']);
        $this->insert('navigation_work', ['direction_id' => '1', 'link' => 'landing', 'name' => 'Лендинг-3']);
        $this->insert('navigation_work', ['direction_id' => '2', 'link' => 'visiting', 'name' => 'Визитка-1']);
        $this->insert('navigation_work', ['direction_id' => '2', 'link' => 'visiting', 'name' => 'Визитка-2']);
        $this->insert('navigation_work', ['direction_id' => '3', 'link' => 'info', 'name' => 'Инфо-1']);
        $this->insert('navigation_work', ['direction_id' => '3', 'link' => 'info', 'name' => 'Инфо-2']);
        $this->insert('navigation_work', ['direction_id' => '4', 'link' => 'personal', 'name' => 'Персональный-1']);
        $this->insert('navigation_work', ['direction_id' => '4', 'link' => 'personal', 'name' => 'Персональный-2']);
        $this->insert('navigation_work', ['direction_id' => '5', 'link' => 'corporate', 'name' => 'Корпоративный-1']);
        $this->insert('navigation_work', ['direction_id' => '5', 'link' => 'corporate', 'name' => 'Корпоративный-2']);
        $this->insert('navigation_work', ['direction_id' => '6', 'link' => 'declaration', 'name' => 'Объявления-1']);
        $this->insert('navigation_work', ['direction_id' => '6', 'link' => 'declaration', 'name' => 'Объявления-2']);
        $this->insert('navigation_work', ['direction_id' => '7', 'link' => 'shop', 'name' => 'Магазин-1']);
        $this->insert('navigation_work', ['direction_id' => '7', 'link' => 'shop', 'name' => 'Магазин-2']);
        $this->insert('navigation_work', ['direction_id' => '8', 'link' => 'social', 'name' => 'Соц.сеть-1']);
        $this->insert('navigation_work', ['direction_id' => '8', 'link' => 'social', 'name' => 'Соц.сеть-2']);
        $this->insert('navigation_work', ['direction_id' => '9', 'link' => 'multimedia', 'name' => 'Мультимедиа-1']);
        $this->insert('navigation_work', ['direction_id' => '9', 'link' => 'multimedia', 'name' => 'Мультимедиа-2']);
        $this->insert('navigation_work', ['direction_id' => '10', 'link' => 'constructor', 'name' => 'Конструктор-1']);
        $this->insert('navigation_work', ['direction_id' => '10', 'link' => 'constructor', 'name' => 'Конструктор-2']);
    }


    public function safeDown()
    {
        $this->delete('navigation_work');
    }

}
