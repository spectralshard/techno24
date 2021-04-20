<?php 
use RainLab\Translate\Classes\Translator;
class Cms60464ef9e7a2b519942462_d677fa5052a338b3f3bb0a8628e9a7e6Class extends Cms\Classes\LayoutCode
{
public function onInit()
{
    $translator = Translator::instance();
    $lang = $translator->getLocale();
$this['lang'] = $translator->getLocale();
$this['site_url'] = asset('');
}
}
