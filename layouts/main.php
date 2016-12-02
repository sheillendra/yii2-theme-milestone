<?php

use yii\helpers\Html;
?>

<?php echo $this->render('@app/views/layouts/_init_view') ?>

<?php
//$mainAsset = $this->params['mainAsset'];
//$milestoneAsset = $mainAsset::register($this);
$milestoneAsset = $this->params['mainAsset']::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?php echo Yii::$app->language ?>">
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

        <link rel="shortcut icon" href="<?php echo $this->params['favico'] ?>">

        <!-- page stylesheets -->
        <!--<link rel="stylesheet" href="vendor/bower-jvectormap/jquery-jvectormap-1.2.2.css"/>-->
        <!-- end page stylesheets -->

        <!-- build:css({.tmp,app}) styles/app.min.css -->

        <!--<link rel="stylesheet" href="vendor/pace/themes/blue/pace-theme-minimal.css"/>-->
        <!--<link rel="stylesheet" href="vendor/animate.css/animate.css"/>-->
        <!-- endbuild -->
        <?php echo Html::csrfMetaTags() ?>
        <title><?php echo Html::encode($this->title) ?></title>
        <?php $this->head() ?>

    </head>
    <body>
        <?php $this->beginBody() ?>
        <div class="app">
            <!--sidebar panel-->
            <?php echo $this->render('@app/views/layouts/_main-sidebar', ['milestoneAsset' => $milestoneAsset]); ?>
            <!-- /sidebar panel -->
            <!-- content panel -->
            <div class="main-panel">
                <!-- top header -->
                <?php echo $this->render('@app/views/layouts/_main-header', ['milestoneAsset' => $milestoneAsset]); ?>
                <!-- /top header -->

                <!-- main area -->
                <div class="main-content">
                    <div class="content-view">
                        <?php echo $this->render('@app/views/layouts/_main-content', ['content' => $content, 'milestoneAsset' => $milestoneAsset]); ?>
                    </div>
                    <!-- bottom footer -->
                    <div class="content-footer">
                        <?php echo $this->render('@app/views/layouts/_main-footer', ['milestoneAsset' => $milestoneAsset]); ?>
                    </div>
                    <!-- /bottom footer -->
                </div>
                <!-- /main area -->
            </div>
            <!-- /content panel -->

            <!--Chat panel-->
            <?php echo $this->render('@app/views/layouts/_main-chat', ['milestoneAsset' => $milestoneAsset]); ?>
            <!--/Chat panel-->

        </div>

        <script type="text/javascript">
            window.paceOptions = {
                document: true,
                eventLag: true,
                restartOnPushState: true,
                restartOnRequestAfter: true,
                ajax: {
                    trackMethods: ['POST', 'GET']
                }
            };
        </script>

        <!-- build:js({.tmp,app}) scripts/app.min.js -->
        <!--<script src="vendor/jquery/dist/jquery.js"></script>-->
        <!--<script src="vendor/pace/pace.js"></script>-->
        <!--<script src="vendor/tether/dist/js/tether.js"></script>-->
        <!--<script src="vendor/bootstrap/dist/js/bootstrap.js"></script>-->
<!--        <script src="vendor/fastclick/lib/fastclick.js"></script>
        <script src="scripts/constants.js"></script>-->
        <!-- endbuild -->

        <!-- page scripts -->
<!--        <script src="vendor/flot/jquery.flot.js"></script>
        <script src="vendor/flot/jquery.flot.resize.js"></script>
        <script src="vendor/flot/jquery.flot.stack.js"></script>
        <script src="vendor/flot-spline/js/jquery.flot.spline.js"></script>
        <script src="vendor/bower-jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="data/maps/jquery-jvectormap-us-aea.js"></script>
        <script src="vendor/jquery.easy-pie-chart/dist/jquery.easypiechart.js"></script>
        <script src="vendor/noty/js/noty/packaged/jquery.noty.packaged.min.js"></script>
        <script src="scripts/helpers/noty-defaults.js"></script>-->
        <!-- end page scripts -->

        <!-- initialize page scripts -->
        <!--<script src="scripts/dashboard/dashboard.js"></script>-->
        <!-- end initialize page scripts -->
        <?php $this->endBody() ?>
    </body>
</html>
<?php
$this->endPage();
