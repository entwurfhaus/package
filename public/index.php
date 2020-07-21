<?php

require "../bootstrap/app.php";

use entwurfhaus\package\Package\Welcome;

$welcome = new Welcome('A PHP Composer Package Boilerplate');

echo $welcome->getMessage();

