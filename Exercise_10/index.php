<?php

require_once 'Video.php';
require_once 'VideoStore.php';
require_once 'Application.php';

$videoStore = new VideoStore();

$app = new Application();
$app->run();

