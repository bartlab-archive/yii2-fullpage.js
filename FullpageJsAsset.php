<?php
namespace maybeworks\fullpagejs;

use \yii\web\AssetBundle;

class FullpageJsAsset extends AssetBundle
{

    public $sourcePath = '@bower/fullpage.js';

    public $css = [
        'jquery.fullPage.css',
    ];

    public $js = [
        'jquery.fullPage.min.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
