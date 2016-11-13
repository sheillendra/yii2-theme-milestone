<?php

namespace sheillendra\milestone\assets;

use yii\web\AssetBundle;

class MilestoneAsset extends AssetBundle {
    public $sourcePath = '@sheillendra/milestone/assets/template';
    public $css = [
        'styles/app.css',
        'styles/app.skins.css'
    ];
    public $js = [
        'scripts/main.js'
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'sheillendra\milestone\assets\BootstrapAsset',
        'sheillendra\milestone\assets\FontAwesomeAsset',
        'yii\web\YiiAsset'
    ];
}
