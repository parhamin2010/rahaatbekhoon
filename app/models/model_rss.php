<?php

class model_rss extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    function getNews()
    {

        $sql = "SELECT a.*,b.name FROM tbl_news a
                LEFT JOIN tbl_category b
                ON a.cat_id=b.id
                WHERE a.status=1
                ORDER BY a.date_created DESC LIMIT 15";
        $results = $this->doSelect($sql);

        $rss_channel = new rssGenerator_channel();
        $rss_channel->atomLinkHref = '';
        $rss_channel->title = NAME;
        $rss_channel->link = URL;
        $rss_channel->description = '';
        $rss_channel->copyright = 'Copyright '.date("Y").' www.'.URL_FOOTER;
        $rss_channel->language = 'en-us';
        $rss_channel->generator = '';
        $rss_channel->managingEditor = '';
        $rss_channel->webMaster = '';

        foreach ($results as $result) {
            $item = new rssGenerator_item();
            $item->title = $result['title'];
            $item->description = $result['description'];
            $item->link = URL.'news/'.$result['n_id'];
            $item->enclosure_url = $result['image'];
            $item->enclosure_type = 'image/jpeg';
            $item->pubDate = $result['date_created'];
            $rss_channel->items[] = $item;
        }
        $rss_feed = new rssGenerator_rss();
        $rss_feed->encoding = 'UTF-8';
        $rss_feed->version = '2.0';
        header('Content-Type: text/xml');
        return $rss_feed->createFeed($rss_channel);
    }
}


?>