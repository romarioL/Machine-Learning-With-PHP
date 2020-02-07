<?php

require_once "vendor/autoload.php";

use WordClassifier\DataProcessors\DataProcessor;
use WordClassifier\Files\CSVReader;
use WordClassifier\Vectorizer\WordVectorizer;

$dataProcessor = new DataProcessor();

$array = $dataProcessor->processCSV(new CSVReader(), "src/Files/nova-versão-dataset.csv");

$vectorizer = new WordVectorizer();

var_dump($vectorizer->vectorize($array["diagnostic"]));