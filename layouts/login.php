<?php

use yii\helpers\Html;
use sheillendra\milestone\assets\LoginMilestoneAsset;

$loginMilestoneAsset = LoginMilestoneAsset::register($this);
?>

<?php $this->beginPage() ?>
<!doctype html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content=""/>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1"/>
        <meta name="msapplication-tap-highlight" content="no">

        <meta name="mobile-web-app-capable" content="yes">
        <meta name="application-name" content="Milestone">

        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-title" content="Milestone">

        <meta name="theme-color" content="#4C7FF0">
        <?= Html::csrfMetaTags() ?>
        <title><?php echo Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>
        <div class="app no-padding no-footer layout-static">
            <div class="session-panel">
                <div class="session">
                    <div class="session-content">
                        <div class="card card-block form-layout">
                            <?php echo $this->render('@app/views/layouts/_login-content', ['content' => $content, 'loginMilestoneAsset' => $loginMilestoneAsset]); ?>
                        </div>
                    </div>
                    <?php echo $this->render('@app/views/layouts/_login-footer', ['loginMilestoneAsset' => $loginMilestoneAsset]); ?>
                </div>

            </div>
        </div>
        <?php $this->endBody() ?>
    </body>
</html>
<?php
$this->endPage();
