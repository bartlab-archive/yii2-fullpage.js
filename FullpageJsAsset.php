<?php
namespace maybeworks\fullpagejs;

use \yii\web\AssetBundle;

class FullpageJsAsset extends AssetBundle {

	public $sourcePath = '@bower/fullpage.js';

	public $css = [
		'jquery.fullPage.css',
	];

	public $js = [
		'vendors/jquery.easings.min.js',
		'vendors/jquery.slimscroll.min.js',
		'jquery.fullPage.min.js',
	];

	public $depends = [
		'yii\web\JqueryAsset',
	];
}
