<?php

namespace Nschnepple\ObjectOrientedAuthor;

require_once(dirname(__DIR__, 2) . "/composer.json/autoloader.php");

use Ramsey\Uuid\Uuid;
/**
 *
 **/
class Author {
	use ValidateUuid;
	/**
	 * id for this Author; this is the primary key
	 * @var Uuid $authorId
	 **/
	private $authorId;
	/**
	 * token is handed out to verify that the profile is valid and not malicious.
	 * @var $authorActivationToken
	 **/
	private $authorActivationToken;
	/**
	 *
	 *
	 **/
	private $authorAvatarUrl;
	/**
	 *
	 *
	 **/
	private $authorEmail;
	/**
	 *
	 *
	 **/
	private $authorHash;
	/**
	 *
	 *
	 **/
	private $authorUsername;
	/**
	 *
	 *
	 **/
	private $authorSalt;

}