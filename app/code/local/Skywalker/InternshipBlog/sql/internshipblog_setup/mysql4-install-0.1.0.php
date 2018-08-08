<?php
$installer = $this;
$installer->startSetup();
$installer->run("

    CREATE TABLE `{$installer->getTable('internshipblog/post_category')}` (
      `id` int(11) NOT NULL auto_increment,
      `name` varchar(255) NOT NULL,
      `description` text,
      `image` varchar(255) default NULL,
      PRIMARY KEY  (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

    INSERT INTO `{$installer->getTable('internshipblog/post_category')}` VALUES (1,'Post 1','This is a post category', NULL);
    
    CREATE TABLE `{$installer->getTable('internshipblog/post')}` (
      `id` int(11) NOT NULL auto_increment,
      `name` varchar(255) NOT NULL,
      `content` text,
      `short_description` text,
      `status` tinyint NOT NULL,
      `created_at` datetime,
      `updated_at` datetime default NULL,
      `category_id` int(11) NOT NULL,
      FOREIGN KEY (`category_id`) references post_category(`id`) on delete cascade,
      PRIMARY KEY  (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

    INSERT INTO `{$installer->getTable('internshipblog/post')}` VALUES (1,'Post 1','This is a blog post','1st post ib blog',0,now(),NULL,1);
    
");
$installer->endSetup();