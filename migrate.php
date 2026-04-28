<?php
require __DIR__ . "/core/migration.php";
$migrate = new Migration();
$migrate->run();
