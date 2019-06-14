<?php
require_once "./inc/Rest.php";

$statuscode = 200;
$response = array();
$header = Rest\Header::mimeType('json');

if ($input->urlSegment1 && is_numeric($input->urlSegment1)) {
    $pageId = $input->urlSegment1;
    if (Rest\Request::is('get')) {
        $p = $pages->get($pageId);

        if ($p->id) {
            $pdata = array("id" => $pageId);
            $p->of(false);

            foreach ($p->template->fieldgroup as $field) {
                if ($field->type instanceof FieldtypeFieldsetOpen) continue;
                $value = $p->get($field->name);
                $pdata[$field->name] = $field->type->sleepValue($p, $field, $value);
            }
            $response = $pdata;
        } else {
            $response["error"] = "Страница не найдена";
            $statuscode = 404;
        }
    }

    if (Rest\Request::is('put')) {
        $params = Rest\Request::params();
        $apiKey = $pages->get("template=api")->key;
        $apiUser = "myapiuser";

        if ($params["uname"] != $apiUser || $params["upass"] != $apiKey) {
            // unauthorized request
            $response["error"] = "Ошибка авторизации";
            $statuscode = 401;
        } else {
            $p = $pages->get($pageId);

            if ($p->id) {
                $p->of(false);
                $p->title = $sanitizer->text($params["title"]);
                $p->name = $sanitizer->pageName($params["name"]);
                $p->save();
                $response["success"] = "Страница обновлена успешно";
            } else {
                $response["error"] = "Страница не найджена";
                $statuscode = 404;
            }
        }
    }

    if (Rest\Request::is('post')) {
        $params = Rest\Request::params();
        $apiKey = $pages->get("template=api")->key;
        $apiUser = "skobarapi";

        if ($params["uname"] != $apiUser || $params["upass"] != $apiKey) {
            $response["error"] = "Ошибка авторизации";
            $statuscode = 401;
        } else {
            $p = new Page();
            $p->template = $sanitizer->text($params["template"]);
            $p->parent = $pages->get($sanitizer->text($params["parent"]));
            $p->name = $sanitizer->pageName($params["name"]);
            $p->title = $sanitizer->text($params["title"]);
            $p->body = htmlspecialchars_decode($sanitizer->entitiesMarkdown($params["body"]));
            $p->save();

            if ($p->id) {
                $response["success"] = "Страница создана";
                $response["url"] = "https://{$config->urls->root}/api/pages/{$p->id}";
            } else {
                $response["error"] = "Что-то не так";
                $statuscode = 404;
            }
        }
    }
}

http_response_code($statuscode);
header($header);
echo json_encode($response);
