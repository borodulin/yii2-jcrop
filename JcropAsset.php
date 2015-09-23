<?php
/**
 * @link https://github.com/borodulin/yii2-jcrop
 * @copyright Copyright (c) 2015 Andrey Borodulin
 * @license https://github.com/borodulin/yii2-jcrop/blob/master/LICENSE
 */

namespace conquer\jcrop;

/**
 * @author Andrey Borodulin
 */
class JcropAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@bower/jcrop';

	public $js = [
            'js/Jcrop.min.js',
	];
	
	public $css = [
	        'css/Jcrop.min.css',
	];
	
	public $depends = [
	        'yii\web\JqueryAsset',
	];
}