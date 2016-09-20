<?php

namespace jonasw91\assets;

use yii\web\AssetBundle;

/**
 * Created by PhpStorm.
 * User: Jonas Wehner
 * Date: 20.09.2016
 * Time: 16:27
 */
class PolyAsset extends AssetBundle
{
    public $basePath = '@vendor/bower/dialog-polyfill';

    public $css = [
        'dialog-polyfill.css',
    ];

    public $js = [
        'dialog-polyfill.js',
        'suite.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
    ];
}