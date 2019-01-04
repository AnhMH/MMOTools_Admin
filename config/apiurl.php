<?php

/**
 * API's Url
 */
use Cake\Core\Configure;

Configure::write('API.Timeout', 60);
Configure::write('API.secretKey', 'hoanganhonline.com');
Configure::write('API.rewriteUrl', array());

Configure::write('API.url_admins_login', 'admins/login');
Configure::write('API.url_admins_updateprofile', 'admins/updateprofile');

Configure::write('API.url_fbaccounts_list', 'fbaccounts/list');
Configure::write('API.url_fbaccounts_detail', 'fbaccounts/detail');
Configure::write('API.url_fbaccounts_addupdate', 'fbaccounts/addupdate');
Configure::write('API.url_fbaccounts_all', 'fbaccounts/all');
Configure::write('API.url_fbaccounts_gettokenurl', 'fbaccounts/gettokenurl');