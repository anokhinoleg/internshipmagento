<?php
$installer = $this;
$installer->startSetup();
$installer->createEntityTables(
    $this->getTable('testing/eavtest')
);
$installer->endSetup();
?>