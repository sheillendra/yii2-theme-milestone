<?php

namespace sheillendra\milestone\assets;

use yii\web\AssetBundle;

class BootstrapAsset extends AssetBundle {
    public $sourcePath = '@sheillendra/milestone/assets/template';
    public $css = [
        'vendor/bootstrap/dist/css/bootstrap.min.css'
    ];
    public $js = [
        'vendor/bootstrap/dist/js/bootstrap.min.js'
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'sheillendra\milestone\assets\TetherAsset',
    ];
}
