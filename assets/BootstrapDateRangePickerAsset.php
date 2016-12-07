<?php

namespace sheillendra\milestone\assets;

use yii\web\AssetBundle;

class BootstrapDateRangePickerAsset extends AssetBundle {

    public $sourcePath = '@sheillendra/milestone/assets/template';
    public $css = [
        'vendor/bootstrap-daterangepicker/daterangepicker.css'
    ];
    public $js = [
        'vendor/moment/min/moment.min.js',
        'vendor/bootstrap-daterangepicker/daterangepicker.js'
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'sheillendra\milestone\assets\BootstrapAsset',
    ];

}
