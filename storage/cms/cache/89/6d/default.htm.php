<?php 
use RainLab\Translate\Classes\Translator;
class Cms5e1de73e9d816699146699_6385f395d7ca3a108ec33161c91fdf51Class extends Cms\Classes\LayoutCode
{
public function onInit()
{
    $translator = Translator::instance();
    $lang = $translator->getLocale();
$this['lang'] = $translator->getLocale();
$this['site_url'] = asset('');
}
}
