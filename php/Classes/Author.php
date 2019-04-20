<?php

namespace Nschnepple\ObjectOriented;

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
	 * token is handed out to verify that the Author is valid and not malicious.
	 * @var $authorActivationToken
	 **/
	private $authorActivationToken;
	/**
	 *
	 *
	 **/
	private $authorAvatarUrl;
	/**
	 * email for this Author; this is a unique index
	 * @var string $authorEmail
	 **/
	private $authorEmail;
	/**
	 * hash for author password
	 * @var string $authorHash
	 **/
	private $authorHash;
	/**
	 *
	 *
	 **/
	private $authorUsername;
	/**
	 * salt for author password
	 * @var $authorSalt
	 **/
	private $authorSalt;

	/**
	 * accessor method for authorId
	 * @return Uuid value of authorId (or null if new Author)
	 */

	public function getAuthorId(): Uuid {
		return ($this->authorId);
	}
	/**
	 * mutator method for authorId
	 *
	 * @param Uuid| string $newAuthorId value of new authorId
	 * @throws \RangeException if $newAuthorId is not positive
	 * @throws \TypeError if the authorId is not
	 */

	public function setAuthorId($newAuthorId): void {
		try {
			$uuid = self::validateUuid($newAuthorId);
		}catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {

			$exceptionType = get_class($exception);
			throw(new $exceptionType($exception->getMessage(), 0, $exception));
		}
		//convert and store the authorId
		$this->profileId = $uuid;
	}
}