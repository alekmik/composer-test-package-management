<?php
require 'vendor/autoload.php';
use CowSay\Cow;

$bessie = new Cow('The code work @alekmik');
$bessie->setEyes('oO')
    ->setTongue('U')
    ->setPoop('@@@')
    ->setUdder('W');
echo $bessie;