<?php

namespace App\Controller;

use Cake\Event\Event;

/**
 * Top page
 */
class FbaccountsController extends AppController {
    
    /**
     * Top page
     */
    public function index() {
        include ('Bus/Fbaccounts/index.php');
    }
}