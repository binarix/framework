<?php namespace Illuminate\Pagination;

class FoundationPresenter extends PaginationPresenter {

    /**
     * Get a pagination current page element.
     *
     * @return string
     */
    public function getCurrentPageLink($page)
    {
        return '<li class="current"><a href="#">'.$page.'</a></li>';
    }

    /**
     * Get a pagination disabled previous or next element.
     *
     * @return string
     */
    public function getDisabledNavigationLink($text)
    {
        return '<li class="arrow unavailable"><a href="#">'.$text.'</a></li>';
    }

    /**
     * Get a pagination previous or next element.
     *
     * @return string
     */
    public function getNavigationLink($url, $text)
    {
        return '<li class="arrow"><a href="'.$url.'">'.$text.'</a></li>';
    }

    /**
     * Get a pagination "dot" link.
     *
     * @return string
     */
    public function getDotsLink()
    {
        return '<li class="unavailable"><a href="#">&hellip;</a></li>';
    }
}
