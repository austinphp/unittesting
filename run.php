<?php
require_once 'User.php';

$users = User::find();
print_r($users);