<?php

if (
    isset($_POST['name']) &&
    isset($_POST['email']) &&
    isset($_POST['subject']) &&
    isset($_POST['phonenumber'])
) {

    $now = date('d/m/Y - H:i:s');

    $data = <<<EOD
--- message ---
Subject: {$_POST['subject']}
Name: {$_POST['name']}
PhoneNumber: {$_POST['phonenumber']}
Email: {$_POST['email']}
--- $now ---
EOD;

    $fp = fopen('register.txt', 'a');
    fwrite($fp, $data . "\n");
    fclose($fp);

    echo "Chúng tôi đã nhận được đơn đăng kí của bạn!";
}

