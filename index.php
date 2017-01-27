<?php

require 'vendor/league/csv/autoload.php';

use League\Csv\Reader;
$csv = Reader::createFromPath('cs_figures.csv');

$tabPeople = $csv->setOffset(1)->setLimit()->fetchAll();

?>