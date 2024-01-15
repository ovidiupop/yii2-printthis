<?php
namespace ovidiupop\printthis;

use yii\web\AssetBundle;

class PrintThisAsset extends AssetBundle
{
    public $sourcePath = '@bower/printThis';

    public $js = [
		    'printThis.js',
	  ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}
