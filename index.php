<?php
require __DIR__ . '/vendor/autoload.php';

use datcal\Model\User;

$user = new User();
$user->name = "Burak";


echo "<pre>";
print_r($user);

echo $user->hasab;
