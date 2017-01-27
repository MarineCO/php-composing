<?php

require 'vendor/league/csv/autoload.php';

use League\Csv\Reader;
$csv = Reader::createFromPath('cs_figures.csv');

$tabPeople = $csv->setOffset(1)->setLimit()->fetchAll();

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Découverte de la librairie League\CSV</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	
	<h1>Computer science figures</h1>

	<div class="ui three column grid">
		<?php foreach ($tabPeople as $person) : ?>

			<div class="ui column">
				<div class="ui fluid card">
					<div class="image">
						<img src="<?= $person[5]; ?>" alt="person">
					</div>
					<div>
						<div class="header"><?= $person[0]; ?></div>
						<div class="meta">
							<a><?= $person[2]; ?></a>
						</div>
					</div>
				</div>
			</div>

		<?php endforeach; ?>
	</div>


</body>
</html>