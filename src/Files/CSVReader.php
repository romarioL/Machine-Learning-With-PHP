<?php

namespace WordClassifier\Files;

use Phpml\Dataset\CsvDataset;

class CSVReader 
{
	public function readFile($file)
	{
		return new CsvDataset($file, 3, true);

	}
}