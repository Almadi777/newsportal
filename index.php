<?php

namespace App;

/*if($_GET['action'] && $_GET['action'] === '') {
    ...
}*/

$app = new Application();

mysqli_query($app->getConnection(), '');

$app->selectAction($_GET['action']);