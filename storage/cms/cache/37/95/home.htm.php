<?php 
use RainLab\Pages\Classes\Page;class Cms60c93737342f8309948708_74a8b87ab46d88d8d070fb5ac819c898Class extends Cms\Classes\LayoutCode
{

public function onStart()
{
    $page = Page::find('chairs');
    $this['chairsPages'] = $page->getChildren();
}
}
