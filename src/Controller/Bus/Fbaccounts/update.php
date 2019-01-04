<?php
use App\Lib\Api;
use Cake\Core\Configure;

$result = array();
if (!empty($id)) {
    $param = array(
        'id' => $id
    );
    $result = Api::call(Configure::read('API.url_fbaccounts_detail'), $param);
}

$this->set(compact(
    'result'
));