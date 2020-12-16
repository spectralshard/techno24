<?php 
use RainLab\Translate\Classes\Translator;
class Cms5fd9abc0ea1f2549643757_727f48187498fd556dd4c42005e18dc2Class extends Cms\Classes\LayoutCode
{
public function onInit()
{
    $translator = Translator::instance();
    $lang = $translator->getLocale();
$this['lang'] = $translator->getLocale();
$this['site_url'] = asset('');
}
}
