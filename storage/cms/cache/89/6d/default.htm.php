<?php 
use RainLab\Translate\Classes\Translator;
class Cms5ea3001b843e1053081207_8fb2594a54080b444cab1be9c7889b6fClass extends Cms\Classes\LayoutCode
{
public function onInit()
{
    $translator = Translator::instance();
    $lang = $translator->getLocale();
$this['lang'] = $translator->getLocale();
$this['site_url'] = asset('');
}
}
