<?php
// Create a session
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


// Site Information
$conf['site_name'] = "BBIT Enterprise";
$conf['site_url'] = "http://localhost/col/";
$conf['site_email'] = "admin@bbite.com";

// Site Language
$conf['site_lang'] = "en";
require "Lang/" . $conf['site_lang'] . ".php";
// Database constants
$conf['db_type'] = "pdo";
$conf['db_host'] = "localhost";
$conf['db_user'] = "root";
$conf['db_pass'] = "";
$conf['db_name'] = "col";

// Email configuration
$conf['mail_type'] = "smtp"; // options: smtp, sendmail, mail
$conf['smtp_host'] = "smtp.gmail.com";
$conf['smtp_user'] = "your_email@gmail.com";
$conf['smtp_pass'] = "yoursecretpassword"; // app password for gmail
$conf['smtp_port'] = 465;
$conf['smtp_secure'] = "ssl"; // options: ssl, tls

// Valid domain for email addresses
$conf['valid_domain'] = ["gmail.com", "yahoo.com", "outlook.com", "hotmail.com", "strathmore.edu"];

// minimum password length
$conf['min_password_length'] = 3;