<?php
namespace maybeworks\fullpagejs;

use \yii\web\AssetBundle;

class FullpageJsAsset extends AssetBundle
{

    public $sourcePath = '@bower/fullpage.js';

    public $css = [
        'dist/fullpage.min.css',
    ];

    public $js = [
        'dist/fullpage.min.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
