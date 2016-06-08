<?php

require_once('includes/ExceptionHandler.php');
require_once('includes/CustomExceptionClass.php');

function badRequest () {
    http_response_code(400);
    exit;
}
function goodRequest () {
    header('Content-type: application/json');
    echo json_encode(["message" => "Success!"]);
    exit;
}

if (0 === strcasecmp('POST', $_SERVER['REQUEST_METHOD'])) {
    if (!empty($_POST['action'])) {
        if ('standard' === $_POST['action']) {
            throw new Exception("Who'da thunk I would have ended up here!");
        } elseif ('custom' === $_POST['action']) {
            throw new CustomException("I'm special... can't you tell?");
        } elseif ('clear' === $_POST['action']) {
            file_put_contents('log.txt', '');
        } else {
            badRequest();
        }
        goodRequest();
    }
}

badRequest();