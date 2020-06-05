<?php 
use RainLab\Translate\Classes\Translator;
class Cms5eda7cf9053e9379500767_848d3600b1578a71ec0f5c328ccb9c59Class extends Cms\Classes\LayoutCode
{
public function onInit()
{
    $translator = Translator::instance();
    $lang = $translator->getLocale();
$this['lang'] = $translator->getLocale();
$this['site_url'] = asset('');
}
}
