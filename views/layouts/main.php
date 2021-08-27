<?php

use yii\helpers\Html;
use app\assets\ltAppAsset;
use app\assets\PortfolioAsset;
use yii\helpers\Url;

PortfolioAsset::register($this);
ltAppAsset::register($this);
?>

<?php $navigatorDirections = \app\models\NavigationDirection::find()->asArray()->all() ?>
<?php $bestWorks = \app\models\NavigationWork::find()->where(['best' => true])->asArray()->all() ?>
<?php $this->beginPage() ?>

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

<div class="wrap" style="padding-top: 40px">
    
	<!--Панель навигации по направлениям-->
	
    <a id="home-page" href="<?= Url::to(['portfolio/index']) ?>"><?= 'На главную' ?></a>
    <div id="navigation">
        <div id="direction-nav">
            <?php foreach ($navigatorDirections as $navigatorDirection): ?>
                <div class="direction" data-id=<?= $navigatorDirection['id'] ?>>
                    <?= $navigatorDirection['name'] ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!--Презентация лучших работ на главной странице-->
	
    <div id="work-nav-best">		
		<?php $imgWidth = 30 - 0.5 * count($bestWorks) ?>
		<?php $imgMarginTop = 0 ?>
        <?php foreach ($bestWorks as $bestWork): ?>
		<?php $imgWidth += 0.5 ?>
		<?php $imgMarginTop += 10 ?>
		    <a class="work
               href="<?= Url::to(['portfolio/' . $bestWork['link']]) ?>">
                <?= Html::img("@web/images/portfolio_works/{$bestWork['image']}", [
					'alt' => $bestWork['name'],
					'style' => [
						'width' => $imgWidth.'%',
						'margin-top' => $imgMarginTop.'px', 
					],	
				]) ?>
            </a>
        <?php endforeach; ?>
    </div>

    <!--Навигация по работам выбранного направления-->
																		
    <?php foreach ($navigatorDirections as $navigatorDirection): ?>
        <div class="work-nav" data-id=<?= $navigatorDirection['id'] ?>>
            <?php $navigatorWorks = \app\models\NavigationWork::find()->where(
                ['direction_id' => $navigatorDirection['id']])->asArray()->all(); ?>
			<?php $imgWidth = 30 - 0.5 * count($navigatorWorks) ?>
			<?php $imgMarginTop = 0 ?>
			<?php foreach ($navigatorWorks as $navigatorWork): ?>
				<?php $imgWidth += 0.5 ?>			 
				<?php $imgMarginTop += 10 ?>			 
                <a class="work" href="<?= Url::to(['portfolio/' . $navigatorWork['link']]) ?>">
                    <?= Html::img("@web/images/portfolio_works/{$navigatorWork['image']}", [
					'alt' => $navigatorWork['name'],
					'style' => [
			    		'width' => $imgWidth.'%',
						'margin-top' => $imgMarginTop.'px',
						]
					]) ?>
                </a>
            <?php endforeach; ?>
        </div>
    <?php endforeach; ?>
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
