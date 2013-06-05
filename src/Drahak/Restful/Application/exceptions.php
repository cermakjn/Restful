<?php
namespace Drahak\Restful\Application;

use Nette;

/**
 * BadRequestException
 * @package Drahak\Restful\Application
 * @author Drahomír Hanák
 */
class BadRequestException extends Nette\Application\BadRequestException
{

	/**
	 * Is thrown when trying to reach secured resource without authentication
	 * @param string $message
	 * @param \Exception $previous
	 * @return BadRequestException
	 */
	public static function unauthorized($message = '', \Exception $previous)
	{
		return new self($message, 401, $previous);
	}

	/**
	 * Is thrown when access to this resource is forbidden
	 * @param string $message
	 * @param \Exception $previous
	 * @return BadRequestException
	 */
	public static function forbidden($message = '', \Exception $previous)
	{
		return new self($message, 403, $previous);
	}

	/**
	 * Is thrown when resource's not found
	 * @param string $message
	 * @param \Exception $previous
	 * @return BadRequestException
	 */
	public static function notFound($message = '', \Exception $previous)
	{
		return new self($message, 404, $previous);
	}

	/**
	 * Is thrown when request method (e.g. POST or PUT) is not allowed for this resource
	 * @param string $message
	 * @param \Exception $previous
	 * @return BadRequestException
	 */
	public static function methodNotSupported($message = '', \Exception $previous)
	{
		return new self($message, 405, $previous);
	}

	/**
	 * Is thrown when this resource is not no longer available (e.g. with new API version)
	 * @param string $message
	 * @param \Exception $previous
	 * @return BadRequestException
	 */
	public static function gone($message = '', \Exception $previous)
	{
		return new self($message, 410, $previous);
	}

	/**
	 * Is thrown when incorrect (or unknown) Content-Type was provided in request
	 * @param string $message
	 * @param \Exception $previous
	 * @return BadRequestException
	 */
	public static function unsupportedMediaType($message = '', \Exception $previous)
	{
		return new self($message, 415, $previous);
	}

	/**
	 * Is thrown when validation problem appears
	 * @param string $message
	 * @param \Exception $previous
	 * @return BadRequestException
	 */
	public static function unprocessableEntity($message = '', \Exception $previous)
	{
		return new self($message, 422, $previous);
	}

	/**
	 * Is thrown to reject request due to rate limiting
	 * @param string $message
	 * @param \Exception $previous
	 * @return BadRequestException
	 */
	public static function tooManyRequests($message = '', \Exception $previous)
	{
		return new self($message, 429, $previous);
	}

}