<?php 
class Cms60cff75631de2698305305_1cdfbdb5353371d506800ba8ab74923fClass extends Cms\Classes\PageCode
{
public function onEnd()
{
    $this['tagline'] = $this->post->title;
    $this['bannerImage'] = $this->themeUrl('assets/images/blog-banner.jpg');

    if ($this->post && $this->post->featured_images->count() > 0) {
        $this['bannerImage'] = $this->post->featured_images->first()->getPath();
    }
}
}
