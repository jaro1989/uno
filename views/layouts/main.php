<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>

        <?php $this->beginBody() ?>
        <nav>
            <div class="container">
                <div class="nav-wrapper">


                    <a href="<?= \yii\helpers\BaseUrl::home();?>" class="brand-logo">Uno counter</a>
                    <?php
                    echo Nav::widget([
                        'options' => ['class' => 'right side-nav', 'id' => 'nav-mobile'],
                        'items' => [


                            // 'Products' menu item will be selected as long as the route is 'product/index'
                            ['label' => 'About', 'url' => ['site/about']],
                            ['label' => 'PLAY', 'url' => ['site/play']],
                            ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                            ['label' => 'Logout', 'url' => ['site/logout'], 'visible' => !Yii::$app->user->isGuest],
                        ],
                    ]);
                    ?>

                    <a class="button-collapse" href="#" data-activates="nav-mobile"><i class="mdi-navigation-menu"></i></a>


                </div>
            </div>
        </nav>
        <div>
            <div class="container">
                <?=
                Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ])
                ?>
                <?= $content ?>
            </div>


            <footer class="footer">
                <div class="container">
                    <p class="pull-left">&copy; My Company <?= date('Y') ?></p>
                    <p class="pull-right"><?= Yii::powered() ?></p>
                </div>
            </footer>

            <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
