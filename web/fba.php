<?php

include __DIR__ . '/../vendor/autoload.php';

ini_set('session.cookie_httponly', 1);
date_default_timezone_set("Europe/Amsterdam");

use Fba\FbaApplication;
use Blend\Framework\Factory\ApplicationFactory;

(new ApplicationFactory(FbaApplication::class, __DIR__ . '/..'))
        ->create()
        ->run();