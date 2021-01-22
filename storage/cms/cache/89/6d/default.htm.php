<?php 
use RainLab\Translate\Classes\Translator;
class Cms5fe1782180a1a140124437_7f0432ceef9224feaa04d8910ae275ceClass extends Cms\Classes\LayoutCode
{
public function onInit()
{
    $translator = Translator::instance();
    $lang = $translator->getLocale();
$this['lang'] = $translator->getLocale();
$this['site_url'] = asset('');
}
}
