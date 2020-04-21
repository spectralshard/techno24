<?php 
use RainLab\Translate\Classes\Translator;
class Cms5e9f3d5f1157b152214970_08737045f45301ca33cae08683e85ec3Class extends Cms\Classes\LayoutCode
{
public function onInit()
{
    $translator = Translator::instance();
    $lang = $translator->getLocale();
$this['lang'] = $translator->getLocale();
$this['site_url'] = asset('');
}
}
