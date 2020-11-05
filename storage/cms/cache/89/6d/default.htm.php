<?php 
use RainLab\Translate\Classes\Translator;
class Cms5fa2e00011c22593587773_1036c7a11883cbee4b9011ac2244eb06Class extends Cms\Classes\LayoutCode
{
public function onInit()
{
    $translator = Translator::instance();
    $lang = $translator->getLocale();
$this['lang'] = $translator->getLocale();
$this['site_url'] = asset('');
}
}
