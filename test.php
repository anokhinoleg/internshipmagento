<?php
ini_set('display_errors', 1);
require 'app/bootstrap.php';
require 'app/Mage.php';

Mage::app('admin')->setUseSessionInUrl(false);

umask(0);

echo "Hello world!";
echo phpinfo();