<?php
$installer = $this;
$installer->startSetup();
$installer->run("
    CREATE TABLE `{$installer->getTable('internship/comment')}` (
        `id` INT(11) NOT NULL AUTO_INCREMENT,
        `date` DATETIME NOT NULL,
        `text` TEXT NOT NULL,
        `author_id` INT(11),
         PRIMARY KEY (`id`),
         FOREIGN KEY (`author_id`) REFERENCES `{$installer->getTable('internship/contact')}`(`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
    INSERT INTO `{$installer->getTable('internship/comment')}` VALUES (1, now(), 'I have just started to learn magento', 1);
    INSERT INTO `{$installer->getTable('internship/comment')}` VALUES (2, now(), 'And what it is like?', 2);
    INSERT INTO `{$installer->getTable('internship/comment')}` VALUES (3, now(), 'I heard that this is some kind of CMS', 3);
    INSERT INTO `{$installer->getTable('internship/comment')}` VALUES (4, now(), 'Yes, it is', 1);
    INSERT INTO `{$installer->getTable('internship/comment')}` VALUES (5, now(), 'Do you like it?', 2);
    INSERT INTO `{$installer->getTable('internship/comment')}` VALUES (6, now(), 'It is pretty interesting', 1);
");
$installer->endSetup();