<?php

namespace maybeworks\fullpagejs;

use yii\base\Widget;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\helpers\ArrayHelper;

class FullpagejsWidget extends Widget {

	public $options = [];

    /**
     * fullPage.js config
     * @var array
     * @see https://github.com/alvarotrigo/fullPage.js#options
     */
    public $clientOptions = [];

    public function init() {
		if (!isset($this->options['id'])) {
			$this->options['id'] = $this->getId();
		}
		echo Html::beginTag('div', $this->options);
    }

    /**
     * @inheritdoc
     */
    public function run() {
		echo Html::endTag('div');
        $this->registerClientScript();
    }

    protected function registerClientScript() {
		$id = $this->options['id'];

		$view = $this->getView();
		FullpageJsAsset::register($view);

		$options = Json::encode($this->clientOptions);
		$view->registerJs("jQuery('#" . $id . "').fullpage($options)");
    }
}