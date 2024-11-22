<?php


class SeoData
{
    public $title;
    public $description;
    public $keywords;
    public $ogSiteName;
    public $ogUrl;
    public $ogTitle;
    public $ogImage;
    public $ogDescription;

    public function __construct($title, $description, $keywords, $ogSiteName, $ogUrl, $ogTitle, $ogImage, $ogDescription)
    {
        $this->title = $title;
        $this->description = $description;
        $this->keywords = $keywords;
        $this->ogSiteName = $ogSiteName;
        $this->ogUrl = $ogUrl;
        $this->ogTitle = $ogTitle;
        $this->ogImage = $ogImage;
        $this->ogDescription = $ogDescription;
    }
}
