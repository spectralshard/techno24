<?php 
use RainLab\Translate\Classes\Translator;class Cms63a0e10dcbc6b715184771_7cd1eebd69bc1655aa0355c6f5e4e724Class extends Cms\Classes\LayoutCode
{


public function onInit()
{
    $translator = Translator::instance();
    $lang = $translator->getLocale();
$this['lang'] = $translator->getLocale();
$this['site_url'] = asset('');
}
}
