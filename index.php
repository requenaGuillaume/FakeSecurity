<?php
declare(strict_types=1);

date_default_timezone_set('Europe/Paris');

require_once 'src/autoload.php';

$kernel = new \Core\Kernel();
$kernel->process();