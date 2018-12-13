<?php 
require_once './src/RandomQuotes.php';

$rq = new \RandomQuotes\RandomQuotes();

// echo $rq->generateRandomQuotes(100);
print_r($rq->generateRandomQuotes(100));