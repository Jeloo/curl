<?php
/**
 * A lightweight cURL library with support for multiple requests in parallel.
 *
 * @package Curl
 * @version 1.0
 * @author Jonas Stendahl
 * @license MIT License
 * @copyright 2012 Jonas Stendahl
 * @link http://github.com/jyggen/curl
 */

use jyggen\Curl\Dispatcher;

class DispatcherTests extends PHPUnit_Framework_TestCase
{

	public function testConstruct()
	{

		$dispatcher = new Dispatcher;

		$this->assertInstanceOf('jyggen\\Curl\\Dispatcher', $dispatcher);

	}

}