<?php
use App\Lib\Api;
use Cake\Core\Configure;

$param = array();
$result = Api::call(Configure::read('API.url_fbaccounts_all'), $param);
//echo '<pre>';
//print_r($result);
//die();
$this->set(compact(
    'result'
));