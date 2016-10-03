<?php

namespace sheillendra\milestone\assets;

use yii\web\AssetBundle;

class BootstrapAsset extends AssetBundle {
    public $sourcePath = '@sheillendra/milestone/assets/template/vendor/bootstrap/dist';
    public $css = [
        'css/bootstrap.min.css'
    ];
    public $js = [
        'js/bootstrap.min.js'
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'sheillendra\milestone\assets\TetherAsset'
    ];
    //public $publishOptions=['forceCopy'=>YII_DEBUG];
}
