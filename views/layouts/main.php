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

<?php $navigatorDirections = \app\models\NavigationDirection::find()->asArray()->all(); ?>

<?php $this->beginPage() ?>
<?php
?>

<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <link href="/css/portfolio.less" rel="stylesheet/less">
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<!--Блок навигации по направлениям Портфолио -->
<div class="wrap navbar" style="padding-top: 40px">
    <div id="direction-nav">
        <a id="home-page" href="<?= Url::to(['portfolio/index']) ?>"><?= 'На главную' ?></a>
		<div id="label-block">
        <?php foreach ($navigatorDirections as $navigatorDirection): ?>			
		<label><?= $navigatorDirection['name'] ?></label>
		</div>	
				<!--Блок навигации по работам одного направления-->	
				<div class="work-nav">
                <?php $navigatorWorks = \app\models\NavigationWork::find()->where(['direction_id' => $navigatorDirection['id']])->asArray()->all(); ?>
                <?php foreach ($navigatorWorks as $navigatorWork): ?>
                    <a href="<?= Url::to(['portfolio/' . $navigatorWork['link']]) ?>"><?= $navigatorWork['name'] ?></a>
                <?php endforeach; ?>
         <?php endforeach; ?>
		</div>			
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
