<?php 
use RainLab\Translate\Classes\Translator;class Cms63a225e9cf781003466976_c3d64fa9089e9632955051f13ae63a4eClass extends Cms\Classes\LayoutCode
{


public function onInit()
{
    $translator = Translator::instance();
    $lang = $translator->getLocale();
$this['lang'] = $translator->getLocale();
$this['site_url'] = asset('');
}
}
