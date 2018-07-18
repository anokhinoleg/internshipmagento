<?php
$installer = $this;
$installer->startSetup();
$installer->run("
    INSERT INTO `{$installer->getTable('internship/contact')}` VALUES (2,'Dima','dimamail.com');
    INSERT INTO `{$installer->getTable('internship/contact')}` VALUES (3,'Gleb','glebmail.com');
");
$installer->endSetup();
?>