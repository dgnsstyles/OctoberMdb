<?php 
class Cms59fa346f10b4e185129214_e614a6e0fd81a5c17ab0dc64eccc155dClass extends \Cms\Classes\PageCode
{
public function onEnd()
{
    // Optional - set the page title to the post title
    if (isset($this->post))
        $this->page->title = $this->post->title;
}
}
