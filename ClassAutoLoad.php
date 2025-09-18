<?php

//Load Composer's autoloader (created by composer, not included with PHPMailer)
require 'Plugins/PHPMailer/vendor/autoload.php';
require 'conf.php';

// autoload classes from specified directories
$directory = ["Forms", "Globals", "Layouts", "Proc"];

spl_autoload_register(function ($class_name) use ($directory) {
    foreach ($directory as $dir) {
        $file = __DIR__ . "/$dir/" . $class_name . '.php';
        if (file_exists($file)) {
            require_once $file;
            return;
        }
    }
});

// Create an instance of the class
$ObjSendMail = new SendMail();
$ObjLayouts = new layouts($conf);
$ObjForms = new forms();
$ObjAuth = new auth();
$ObjFncs = new fncs();

$ObjAuth->signup($conf, $ObjFncs);