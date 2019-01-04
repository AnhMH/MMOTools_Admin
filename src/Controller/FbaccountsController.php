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
    
    /**
     * Update
     */
    public function update($id = '') {
        include ('Bus/Fbaccounts/update.php');
    }
}
