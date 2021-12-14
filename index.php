<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use formgen\form\BuildForm;

require_once 'vendor/autoload.php';

$form = new BuildForm('test.php', 'get', true);

$form->addInput('text', 'Name', array(
    'required' => false,
));
$form->addInput('password', 'Password', array(
    'class' => 'pass',
));
$form->addInput('email', 'Email');
$form->addInput('select', 'City', array(
    'data' => ['Донецк', 'Макеевка'],
    'required' => true,
    'selectedPos' => 1,
));

$form->create();