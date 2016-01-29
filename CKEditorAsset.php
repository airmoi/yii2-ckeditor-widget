<?php
/**
 * @link https://github.com/himiklab/yii2-ckeditor-widget
 * @copyright Copyright (c) 2014 HimikLab
 * @license http://opensource.org/licenses/MIT MIT
 */

namespace himiklab\ckeditor;

use yii\web\AssetBundle;

class CKEditorAsset extends AssetBundle
{
    public $version = '4.5.6';
    public $package = 'basic';
    
    public $sourcePath = '';

    public $js = [
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
    
    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        $jsPath = "//cdn.ckeditor.com/$version/$package/ckeditor.js";
        
        $this->js = [$jsPath];
    }
}
