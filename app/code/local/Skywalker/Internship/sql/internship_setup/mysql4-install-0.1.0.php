<?php
$installer = $this;
$installer->startSetup();
$installer->run("
    CREATE TABLE `{$installer->getTable('internship/contact')}` (
      `id` int(11) NOT NULL auto_increment,
      `name` VARCHAR(255) NOT NULL,
      `email` VARCHAR(255) NOT NULL, 
      PRIMARY KEY  (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

    INSERT INTO `{$installer->getTable('internship/contact')}` VALUES (1,'Oleg','olegmail.com');
    INSERT INTO `{$installer->getTable('internship/contact')}` VALUES (2,'Dima','dimamail.com');
    INSERT INTO `{$installer->getTable('internship/contact')}` VALUES (3,'Gleb','glebmail.com');
");
$installer->endSetup();
?>