<?php 
class Cms59fa2e12cc14d417789403_f8d556a3077ec7504876c865c181752aClass extends \Cms\Classes\PageCode
{
public function onEnd()
{
    // Optional - set the page title to the post title
    if (isset($this->post))
        $this->page->title = $this->post->title;
}
}
