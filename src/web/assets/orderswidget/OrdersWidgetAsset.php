<?php
namespace topshelfcraft\recurringorders\web\assets;

use craft\commerce\web\assets\statwidgets\StatWidgetsAsset;
use craft\web\AssetBundle;
use craft\web\assets\admintable\AdminTableAsset;
use craft\web\assets\cp\CpAsset;

class OrdersWidgetAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public function init()
    {

        $this->sourcePath = __DIR__;

        $this->depends = [
            CpAsset::class,
            StatWidgetsAsset::class,
            AdminTableAsset::class
        ];
        $this->js[] = 'js/OrdersWidgetSettings.js';

        parent::init();

    }

}
