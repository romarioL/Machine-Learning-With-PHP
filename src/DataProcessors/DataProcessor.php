<?php


namespace WordClassifier\DataProcessors;
use WordClassifier\Files\CSVReader;

class DataProcessor 
{
	public function processCSV(CSVReader $csv, $file)
	{

		$arrayCSV = $csv->readFile($file);

		$MedicalText = [];
		$Category = [];
		$Diagnostic = [];

		foreach($arrayCSV->getSamples() as $sample){
			$MedicalText[] = $sample[0];
			$Category[] = $sample[1];
			$Diagnostic[] = $sample[2];
		}

		return ["medicalText" => $MedicalText, "category" => $Category, "diagnostic" => $Diagnostic];
	}
}