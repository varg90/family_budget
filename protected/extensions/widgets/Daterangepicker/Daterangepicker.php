<?php

class Daterangepicker extends CWidget
{
    public $options,
            $callback,
            $enviroment,
            $defaultValue = '',
            $beginFormatLabel = '',
            $endFormatLabel = ' - ',
            $language = 'ru-RU',
            $label = 'Reservation dates',
            $id = 'daterangepicker';

    public function init()
    {
        parent::init();
        echo $this->getEnvironment();
        $this->registerScripts(__CLASS__ . '#' . $this->id,
                "$('#{$this->id}')."."daterangepicker(".$this->getAttributes().");");
    }

    protected function registerScripts($id, $embeddedScript) {
                $basePath = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'assets' . DIRECTORY_SEPARATOR;
                $baseUrl = Yii::app()->getAssetManager()->publish($basePath, false, -1, YII_DEBUG);

                $cs = Yii::app()->clientScript;
                $cs->registerCoreScript('jquery');
        $cs->registerScriptFile($baseUrl.'/js/date/date.js');
                $cs->registerScriptFile($baseUrl.'/js/date/date-'.$this->language.'.js');
        $cs->registerScriptFile($baseUrl.'/js/daterangepicker.js');
        $cs->registerCssFile($baseUrl.'/css/daterangepicker.css');

                $cs->registerScript($id, $embeddedScript, CClientScript::POS_END);
        }

    protected function getAttributes()
    {
        $result = ' ';
        $jsOptions = !empty($this->options) ? CJavaScript::encode($this->options) : '';
        $jsCallback = !empty($this->callback) ? CJavaScript::encode($this->callback) : '';

        if ($jsOptions  !== '') {
            $result = $jsOptions;
        }
        else {
            $result .= "''";
        }
        if ($jsCallback !== '') {
            $result = $result.", ".$jsCallback;
        }
        return $result;
    }

    protected function getEnvironment()
    {
        if (isset($this->enviroment)) {
            return $this->enviroment;
        }
        return '
                <div class="control-group">
                  <label class="control-label" for="'.$this->id.'"><h4>'.$this->label.'</h4></label>
                  <div class="controls">
                    <div class="input-prepend">
                      <span class="add-on"><i class="icon-calendar"></i></span>
                      <input type="text" value="'.$this->defaultValue.'" name="'.$this->id.'" id="'.$this->id.'" style="cursor: default; background: white"/>
                      <input type="hidden" name="dateId" id="dateId" />
                    </div>
                  </div>
                </div>';
    }
}
