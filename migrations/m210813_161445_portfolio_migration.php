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
        $this->insert('navigation_work', ['direction_id' => '1', 'link' => 'landing', 'name' => 'Лендинг-1', 'image' => 'landing1.png', 'best' => true]);
        $this->insert('navigation_work', ['direction_id' => '1', 'link' => 'landing', 'name' => 'Лендинг-2', 'image' => 'landing2.png']);
        $this->insert('navigation_work', ['direction_id' => '1', 'link' => 'landing', 'name' => 'Лендинг-3', 'image' => 'landing3.png']);
        $this->insert('navigation_work', ['direction_id' => '1', 'link' => 'landing', 'name' => 'Лендинг-4', 'image' => 'landing4.png']);
        $this->insert('navigation_work', ['direction_id' => '1', 'link' => 'landing', 'name' => 'Лендинг-5', 'image' => 'landing5.png']);
        $this->insert('navigation_work', ['direction_id' => '1', 'link' => 'landing', 'name' => 'Лендинг-6', 'image' => 'landing6.png']);
        $this->insert('navigation_work', ['direction_id' => '2', 'link' => 'visiting', 'name' => 'Визитка-1', 'image' => 'visiting1.png']);
        $this->insert('navigation_work', ['direction_id' => '2', 'link' => 'visiting', 'name' => 'Визитка-2', 'image' => 'visiting2.png']);
        $this->insert('navigation_work', ['direction_id' => '2', 'link' => 'visiting', 'name' => 'Визитка-3', 'image' => 'visiting3.png']);
        $this->insert('navigation_work', ['direction_id' => '2', 'link' => 'visiting', 'name' => 'Визитка-4', 'image' => 'visiting4.png']);
        $this->insert('navigation_work', ['direction_id' => '2', 'link' => 'visiting', 'name' => 'Визитка-5', 'image' => 'visiting5.png']);
        $this->insert('navigation_work', ['direction_id' => '3', 'link' => 'info', 'name' => 'Инфо-1', 'image' => 'info1.png']);
        $this->insert('navigation_work', ['direction_id' => '3', 'link' => 'info', 'name' => 'Инфо-2', 'image' => 'info2.png']);
        $this->insert('navigation_work', ['direction_id' => '3', 'link' => 'info', 'name' => 'Инфо-3', 'image' => 'info3.png']);
        $this->insert('navigation_work', ['direction_id' => '3', 'link' => 'info', 'name' => 'Инфо-4', 'image' => 'info4.png']);
        $this->insert('navigation_work', ['direction_id' => '4', 'link' => 'personal', 'name' => 'Персональный-1', 'image' => 'personal1.png', 'best' => true]);
        $this->insert('navigation_work', ['direction_id' => '4', 'link' => 'personal', 'name' => 'Персональный-2', 'image' => 'personal2.png']);
        $this->insert('navigation_work', ['direction_id' => '4', 'link' => 'personal', 'name' => 'Персональный-3', 'image' => 'personal3.png']);
        $this->insert('navigation_work', ['direction_id' => '5', 'link' => 'corporate', 'name' => 'Корпоративный-1', 'image' => 'corporate1.png']);
        $this->insert('navigation_work', ['direction_id' => '5', 'link' => 'corporate', 'name' => 'Корпоративный-2', 'image' => 'corporate2.png']);
        $this->insert('navigation_work', ['direction_id' => '5', 'link' => 'corporate', 'name' => 'Корпоративный-3', 'image' => 'corporate3.png']);
        $this->insert('navigation_work', ['direction_id' => '6', 'link' => 'declaration', 'name' => 'Объявления-1', 'image' => 'declaration1.png']);
        $this->insert('navigation_work', ['direction_id' => '6', 'link' => 'declaration', 'name' => 'Объявления-2', 'image' => 'declaration2.png']);
        $this->insert('navigation_work', ['direction_id' => '6', 'link' => 'declaration', 'name' => 'Объявления-3', 'image' => 'declaration3.png']);
        $this->insert('navigation_work', ['direction_id' => '7', 'link' => 'shop', 'name' => 'Магазин-1', 'image' => 'shop1.png', 'best' => true]);
        $this->insert('navigation_work', ['direction_id' => '7', 'link' => 'shop', 'name' => 'Магазин-2', 'image' => 'shop2.png']);
        $this->insert('navigation_work', ['direction_id' => '7', 'link' => 'shop', 'name' => 'Магазин-3', 'image' => 'shop3.png']);
        $this->insert('navigation_work', ['direction_id' => '8', 'link' => 'social', 'name' => 'Соц.сеть-1', 'image' => 'social1.png']);
        $this->insert('navigation_work', ['direction_id' => '8', 'link' => 'social', 'name' => 'Соц.сеть-2', 'image' => 'social2.png']);
        $this->insert('navigation_work', ['direction_id' => '8', 'link' => 'social', 'name' => 'Соц.сеть-3', 'image' => 'social3.png']);
        $this->insert('navigation_work', ['direction_id' => '9', 'link' => 'multimedia', 'name' => 'Мультимедиа-1', 'image' => 'multimedia1.png']);
        $this->insert('navigation_work', ['direction_id' => '9', 'link' => 'multimedia', 'name' => 'Мультимедиа-2', 'image' => 'multimedia2.png']);
    }


    public function safeDown()
    {
        $this->delete('navigation_work');
    }

}
