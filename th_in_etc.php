<?php
require_once dirname(__FILE__) . '/vendor/autoload.php';

use Criteria\NameHas;
use FStrategy\ScanInPath;
use Scripts\ConsoleFilter;

(new ConsoleFilter(
    new NameHas('th'), new ScanInPath('/etc')
))->handle();