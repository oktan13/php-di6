<?php

namespace App;

class Book
{
    public $page;

    public function __construct(Page $page)
    {
        $this->page = $page;
        echo $this->page->getFont() . PHP_EOL;
        echo $this->page->getFormat();
    }
}