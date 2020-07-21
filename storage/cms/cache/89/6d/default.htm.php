<?php 
use RainLab\Translate\Classes\Translator;
class Cms5f1700e8559b0825779956_1eb0aaf94b76e2ee3b9337e0a62f845dClass extends Cms\Classes\LayoutCode
{
public function onInit()
{
    $translator = Translator::instance();
    $lang = $translator->getLocale();
$this['lang'] = $translator->getLocale();
$this['site_url'] = asset('');
}
}
