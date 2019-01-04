<?php

use App\Lib\Api;
use App\Lib\Log\AppLog;
use Cake\Core\Configure;

header('Content-Type: application/json');

$param = $this->request->data();
if (empty($param['username']) || empty($param['password'])) {
    $result = array(
        "st"    => "error",
        "label" => "bg-light-green",
        "txt" => __('Please input all fields')
    );
} else {
    $url = Api::call(Configure::read('API.url_fbaccounts_gettokenurl'), $param);

    $result = array(
        "st"    => "success",
        "label" => "bg-light-green",
        "txt" => 'Update successfully',
        "url" => $url
    );
}

echo json_encode($result);
exit();