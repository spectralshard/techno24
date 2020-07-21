<?php 
class Cms5f1700ef8d058303690889_b7fbba0efe0cf86b35012caf7edda72aClass extends Cms\Classes\PageCode
{
public function onEnd()
{
    // Optional - set the page title to the post title
    if ($this->post)
    $this->page->title = $this->post->title;
    $this['image_url'] = $this->post->featured_images[0]->path;
    $this->page->meta_title = $this->post->title;
    $this->page->meta_description = $this->post->summary;
}
}
