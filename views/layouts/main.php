<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
<?php $this->beginBody() ?>

<div id="wb_header">
    <div id="header">
        <div class="row">
            <div class="col-1">
                <div id="wb_Text8">
                    <span id="wb_uid0">YII2 + React js + rest</span>
                </div>
                <div id="wb_ResponsiveMenu">
                    <label class="toggle" for="ResponsiveMenu-submenu" id="ResponsiveMenu-title">Меню<span id="ResponsiveMenu-icon"><span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;</span></span></label>
                    <input type="checkbox" id="ResponsiveMenu-submenu">
                    <ul class="ResponsiveMenu" id="ResponsiveMenu">
                        <li><a href="http://">&#1044;&#1086;&#1084;&nbsp;&#1074;&nbsp;react</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="wb_logo_div">
    <div id="logo_div">
        <div class="row">
            <div class="col-1">
                <div id="wb_Image1">
                    <img src="images/yii.png" id="Image1" alt="">
                </div>
            </div>
            <div class="col-2">
                <div id="wb_Image2">
                    <img src="images/1280px-React-icon.svg.png" id="Image2" alt="">
                </div>
            </div>
            <div class="col-3">
                <div id="wb_Image3">
                    <img src="images/apps-sdk_03_rest_api_275.png" id="Image3" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="app-container">
<?= $content ?>
</div>
<div id="wb_footer">
    <div id="footer">
        <div class="row">
            <div class="col-1">
                <div id="wb_Text3">
                    <span id="wb_uid40">Model Generator<br>This generator generates an ActiveRecord class for the specified database table.</span>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
