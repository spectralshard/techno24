<?php 
use RainLab\Translate\Classes\Translator;
class Cms5ed7d9f71eddb807856941_2c423b002225d5e2ece29ee9af6217a9Class extends Cms\Classes\LayoutCode
{
public function onInit()
{
    $translator = Translator::instance();
    $lang = $translator->getLocale();
$this['lang'] = $translator->getLocale();
$this['site_url'] = asset('');
}
}
