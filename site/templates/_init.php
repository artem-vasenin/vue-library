<?php
    $seoDescription = $page->seo_description;
    $seoKeywords = $page->seo_keywords;
    $seoTitle = $page->get("seo_title|title");
    $mainUrl = $config->urls->root;

    $settings = $pages->get("template=settings");

    $home = $pages->get(1);

    $language = $home->language_ru[0];

    $config->urls->js = $config->urls->templates . "static/js/";
    $config->urls->img = $config->urls->templates . "static/img/";

    $u_agent = $_SERVER['HTTP_USER_AGENT'];
    $mobiles = 0;
    if(stripos($u_agent, 'iPhone') || stripos($u_agent, 'Android') ||
        stripos($u_agent, 'iPad') || stripos($u_agent, 'iPod') ||
        stripos($u_agent, 'Mobile_Windows_Phone') || stripos($u_agent, 'Mobile')) {
        $mobiles = 1;
    }
