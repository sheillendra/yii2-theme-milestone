<?php

namespace sheillendra\milestone\assets;

use yii\web\AssetBundle;

class TsfWizardAsset extends AssetBundle {

    public $sourcePath = '@sheillendra/milestone/assets/template';
    public $css = [
        'styles/gsi-step-indicator.css',
        'styles/tsf-step-form-wizard.css'
    ];
    public $js = [
        'scripts/helpers/tsf/js/tsf-wizard-plugin.js'
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'sheillendra\milestone\assets\TetherAsset',
    ];

}
