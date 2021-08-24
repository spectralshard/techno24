<?php 
class Cms6046549b605a5036126291_cd219a4690a52dbba38ccb46e3a8ecfbClass extends Cms\Classes\PageCode
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
