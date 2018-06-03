<?php
    header('Content-Type: application/json');

    $contentArray = array();
    $pageID = null;

    if($input->get['tp']) {
        switch($input->get['tp']) {
            case "home": 
                $pageID = 1;
            break;
            case "books":
                $pageID = 1018;
            break;
            case "chat": 
                $pageID = 1019;
            break;
            case "profille":
                $pageID = 1020;
            break;
            case "contacts":
                $pageID = 1021;
            break;
        }

        $contentArray["title"] = $pages->get($pageID)->title;
        $contentArray["body"] = htmlspecialchars_decode($pages->get($pageID)->body);
        echo json_encode($contentArray);
    } else {
        $session->redirect('/');
    }
