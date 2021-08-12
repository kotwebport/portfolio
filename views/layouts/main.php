<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\ltAppAsset;
use app\assets\PortfolioAsset;
use yii\helpers\Url;

PortfolioAsset::register($this);
ltAppAsset::register($this);

?>
<?php $this->beginPage() ?>

<?php
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
		'constructor' => 'Конструктор'		
	]
?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap navbar" style="padding-top: 40px">
	<div id="direction-navigation">		
		<ul>
			<?php foreach ($directions as $directionLink => $directionName): ?>
			<li class="direction"><a href="<?= Url::to(['portfolio/'.$directionLink]) ?>"><?= $directionName ?></a></li>	
			<?php endforeach; ?>			
		</ul>
	</div>
</div>
	
	
<div class="wrap">
   <div class="container">
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
