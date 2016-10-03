<?php

namespace sheillendra\milestone\assets;

use yii\web\AssetBundle;

class LoginMilestoneAsset extends AssetBundle {
    public $sourcePath = '@sheillendra/milestone/assets/template';
    public $css = [
        'styles/app.css',
        'styles/app.skins.css'
    ];
    public $js = [
        
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'sheillendra\milestone\assets\BootstrapAsset',
        'sheillendra\milestone\assets\FontAwesomeAsset',
        'yii\web\YiiAsset'
    ];
    //public $publishOptions=['forceCopy'=>YII_DEBUG];
}
