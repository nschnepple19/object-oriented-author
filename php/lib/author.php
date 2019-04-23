<?php
// setup require_onces, namespaces (make sure to include both autoloaders
// use the new keyword to call the constructor in the class and add all required parameters
//  var_dump() the result from the step above

require_once(dirname( __DIR__) . "/vendor/autoload.php");
require_once(dirname(__DIR__) . "/classes/autoload.php");

	$authorId = new Author();

	$authorId->set_Id("f805a6fb-83c8-4690-bcb2-19b170cfc8f8");

	echo "author id: " . $authorId->get_id();

	var_dump(Author::getAuthorByAuthorId($pdo, $authorId->getAuthorId()));

