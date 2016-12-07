<?php

namespace sheillendra\milestone\assets;

use yii\web\AssetBundle;

class TetherAsset extends AssetBundle {
    public $sourcePath = '@sheillendra/milestone/assets/template';
    public $css = [];
    public $js = [
        'vendor/tether-1.3.3/dist/js/tether.min.js'
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
