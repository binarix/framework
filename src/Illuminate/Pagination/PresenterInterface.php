<?php namespace Illuminate\Pagination;

interface PresenterInterface {

    /**
     * Get a pagination current page element.
     *
     * @return string
     */
    public function getCurrentPageLink($page);

    /**
     * Get a pagination disabled previous or next element.
     *
     * @return string
     */
    public function getDisabledNavigationLink($text);

    /**
     * Get a pagination previous or next element.
     *
     * @return string
     */
    public function getNavigationLink($url, $text);

    /**
     * Get a pagination "dot" link.
     *
     * @return string
     */
    public function getDotsLink();
}
