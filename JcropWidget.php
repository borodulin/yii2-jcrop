<?php
/**
 * @link https://github.com/borodulin/yii2-jcrop
 * @copyright Copyright (c) 2015 Andrey Borodulin
 * @license https://github.com/borodulin/yii2-jcrop/blob/master/LICENSE
 */

namespace conquer\jcrop;

use yii\helpers\Html;
use conquer\helpers\Json;
use yii\web\JsExpression;
use yii\helpers\Url;

/**
 * @author Andrey Borodulin
 */
class JcropWidget extends \yii\base\Widget
{

    /**
     * Options Reference
     * @link http://jcrop.org/doc/options
     * @var array
     */
    public $options = [];

    /**
     * Container tag
     * @var string
     */
    public $tag = 'img';

    /**
     * @see Url::to()
     * @var mixed
     */
    public $src;
    
    /**
     * Container html options
     * @var array
     */
    public $htmlOptions = [];

    /**
     * Js function
     * @var string
     */
    public $invocation;
    
    /**
     * Initializes the widget.
     * If you override this method, make sure you call the parent implementation first.
     */
    public function init()
    {
        if (!isset($this->htmlOptions['id'])) {
            $this->htmlOptions['id'] = $this->getId();
        }
        if (isset($this->src)) {
            $this->htmlOptions['src'] = Url::to($this->src);
        }
        if (($this->tag == 'img') && !isset($this->htmlOptions['alt'])) {
            $this->htmlOptions['alt'] = '';
        }
        echo Html::beginTag($this->tag, $this->htmlOptions);
    }

    /**
     * @inheritdoc
     */
    public function run()
    {
        echo html::endTag($this->tag);
        
        $view = $this->view;

        JcropAsset::register($view);
        
        $id = $this->htmlOptions['id'];

        $options = Json::encode($this->options);

        if (is_string($this->invocation)) {
            $options .= ', ' . $this->invocation;
        }
        
        $view->registerJs("jQuery('#$id').Jcrop($options);");
    }
}