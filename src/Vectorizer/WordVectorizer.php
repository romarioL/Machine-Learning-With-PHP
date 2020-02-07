<?php 

namespace WordClassifier\Vectorizer;
use WordClassifier\DataProcessors\DataProcessor;
use Phpml\FeatureExtraction\TokenCountVectorizer;
use Phpml\Tokenization\WordTokenizer;
use Phpml\FeatureExtraction\TfIdfTransformer;

class WordVectorizer
{
	public function vectorize($array)
	{

		$vectorizer = new TokenCountVectorizer(new WordTokenizer());
		$tfIdfTransformer = new TfIdfTransformer();

		$vectorizer->fit($array);
		$vectorizer->transform($array);

		$tfIdfTransformer->fit($array);
		$tfIdfTransformer->transform($array);

		return $array;

	}
}