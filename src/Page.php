<?php

namespace App;

class Page
{
    private $format = 'A4';
    private $font = 'Arial';

    public function getFormat()
    {
        return $this->format;
    }

    public function getFont()
    {
        return $this->font;
    }
}