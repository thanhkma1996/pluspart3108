<?php
namespace	Magenest\Movie\Block;
use	Magento\Framework\View\Element\Template;
class	Movie	extends	Template
{
    public function getMovieUrl()
    {
        return $this->getUrl('movie/index/allmovie');
    }

    public function getActorUrl()
    {
        return $this->getUrl('movie/index/allactor');
    }

    public function getAllInfoUrl()
    {
        return $this->getUrl('movie/index/allinfo');
    }
}