<?php

namespace App\support;

use App\controllers\AdminController;
use App\controllers\HomepageController;
use Exception;

class Application
{
    private $databaseConnection;

    public function __construct() {
        // connect all databases
        $this->databaseConnection = mysqli_connect();
    }

    public function selectAction(string $action): Controller
    {
        if($action === 'homepage')
        {
            return new HomePageController();
        } elseif ($action === 'admin') {
            return new AdminController();
        } else {
            throw new Exception('action is wrong');
        }
    }

    public function getConnection() {
        return $this->databaseConnection;
    }
}