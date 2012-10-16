<?php
$this->startSetup();

$this->getConnection()->addColumn(
    $this->getTable('aoestatic/url'), 
    'expire', 
    'datetime not null'
);

$this->endSetup();
