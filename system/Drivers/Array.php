<?php namespace Core\Drivers;

/**
 *This class performs repetative Array functions.
 *
 *This class implements Singleton and cannot be subclassed. It sanitizes on our arrays before we use them.
 *
 *@author Geoffrey Oliver <geoffrey.oliver2@gmail.com>
 *@copyright 2015 - 2020 Geoffrey Oliver
 *@category Core
 *@package Core\Drivers
 *@link core.gliver.io
 *@license http://opensource.org/licenses/MIT MIT License
 *@version 1.0.1
 */

class Array {

	/**
	 *This constructor class is private to prevent creating instances of this class
	 *
	 *@param null
	 *@return void
	 *@example String.php 17 29 Example of Similar Singleton implementation.
	 */
	private function __construct()
	{
		//do something

	}

	/**
	 *This magic __clone() is private to prevent cloning of this class
	 *
	 *@param null
	 *@return void
	 *@example String.php 30  41 Example of Singleton Implementation
	 */
	private function __clone()
	{
		//do something

	}

	/**
	 *This method loops through the items of an array removing elements with empty values
	 *
	 *@param array $array The array whose values are to be cleaned
	 *@return array The input array after cleaning has been done
	 *@throws This method does not throw an error
	 */
	public static function clean($array)
	{
		//loop throught the input array removing empty elements and return resultant array
		return array_filter($array, function($item){

				return ! empty($item);

		});

	}

	/**
	 *This method loops through array elements removing whitespaces from begging and ending of s
	 *tring element values
	 *@param array $array The input array to be trimmed of whitespace
	 *@return array The input array after it has been trimmed of the whitespace
	 *@throws This method does not throw an error
	 */
	public static function trim($array)
	{
		//loop the through the array elements removing the whitespaces
		return array_map(function($item){

			return trim($item);

		}, $array);

	}

}