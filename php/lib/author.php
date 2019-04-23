<?php
// setup require_onces, namespaces (make sure to include both autoloaders
// use the new keyword to call the constructor in the class and add all required parameters
//  var_dump() the result from the step above

require_once(dirname( __DIR__) . "/vendor/autoload.php");
require_once(dirname(__DIR__) . "/classes/autoload.php");

use Nschnepple\ObjectOriented\Author;

	$authorId = new Author("f805a6fb-83c8-4690-bcb2-19b170cfc8f8", "shootdang.com", "0abf9d115769410ab1d55e0acec5f8b0", "shootdang2019@gmail.com", "iNvck", "This Was Rough!");

	$authorId->setAuthorId("f805a6fb-83c8-4690-bcb2-19b170cfc8f8");

//	echo "author id: " . $authorId->getAuthorId();

	var_dump($authorId);

