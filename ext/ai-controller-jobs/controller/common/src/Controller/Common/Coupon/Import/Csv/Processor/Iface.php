<?php

/**
 * @license LGPLv3, http://opensource.org/licenses/LGPL-3.0
 * @copyright Aimeos (aimeos.org), 2017-2020
 * @package Controller
 * @subpackage Common
 */


namespace Aimeos\Controller\Common\Coupon\Import\Csv\Processor;


/**
 * Common interface for all coupon CSV export processors
 *
 * @package Controller
 * @subpackage Common
 */
interface Iface
{
	/**
	 * Initializes the object
	 *
	 * @param \Aimeos\MShop\Context\Item\Iface $context Context object
	 * @param array $mapping Associative list of field position in CSV as key and domain item key as value
	 * @param \Aimeos\Controller\Common\Coupon\Import\Csv\Processor\Iface $object Decorated processor
	 */
	public function __construct( \Aimeos\MShop\Context\Item\Iface $context, array $mapping,
		\Aimeos\Controller\Common\Coupon\Import\Csv\Processor\Iface $object = null );


	/**
	 * Saves the coupon code related data to the storage
	 *
	 * @param \Aimeos\MShop\Coupon\Item\Code\Iface $item Coupon code object
	 * @param array $data List of CSV fields with position as key and data as value
	 * @return array List of data which hasn't been imported
	 */
	public function process( \Aimeos\MShop\Coupon\Item\Code\Iface $item, array $data ) : array;
}
