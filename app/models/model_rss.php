<?php

class model_rss extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    function getNews()
    {
        $rss_channel = new rssGenerator_channel();
        $rss_channel->atomLinkHref = '';
        $rss_channel->title = NAME;
        $rss_channel->link = URL;
        $rss_channel->description = 'The latest news about web-development.';
        $rss_channel->language = 'en-us';
        $rss_channel->generator = 'PHP RSS Feed Generator';
        $rss_channel->managingEditor = 'editor@mysite.com (Alex Jefferson)';
        $rss_channel->webMaster = DEVELOPER;

        $item = new rssGenerator_item();
        $item->title = 'New website launched';
        $item->description = 'Today I finaly launch a new website.';
        $item->link = 'http://newsite.com';
        $item->guid = 'http://newsite.com';
        $item->pubDate = 'Tue, 07 Mar 2006 00:00:01 GMT';
        $rss_channel->items[] = $item;

        $item = new rssGenerator_item();
        $item->title = 'Another website launched';
        $item->description = 'Just another website launched.';
        $item->link = 'http://anothersite.com';
        $item->guid = 'http://anothersite.com';
        $item->pubDate = 'Wed, 08 Mar 2006 00:00:01 GMT';
        $rss_channel->items[] = $item;

        $rss_feed = new rssGenerator_rss();
        $rss_feed->encoding = 'UTF-8';
        $rss_feed->version = '2.0';
        header('Content-Type: text/xml');
        return $rss_feed->createFeed($rss_channel);
    }
}


?>