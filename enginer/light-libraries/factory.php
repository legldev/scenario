<?php
/**
 * @version		$Id: factory.php 15184 2010-03-04 23:18:17Z ian $
 * @package		Joomla.Framework
 * @copyright	Copyright (C) 2005 - 2010 Open Source Matters. All rights reserved.
 * @license		GNU/GPL, see LICENSE.php
 * Joomla! is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See COPYRIGHT.php for copyright notices and details.
 */
defined('PATH_BASE') or die();
/**
 * Joomla Framework Factory class
 *
 * @static
 * @package		Joomla.Framework
 * @since	1.5
 */
class eFactory
{
	/**
	 * Get a application object
	 *
	 * Returns a reference to the global {@link JApplication} object, only creating it
	 * if it doesn't already exist.
	 *
	 * @access public
	 * @param	mixed	$id 		A client identifier or name.
	 * @param	array	$config 	An optional associative array of configuration settings.
	 * @return object JApplication
	 */

	/**
	 * Get a configuration object
	 *
	 * Returns a reference to the global {@link JRegistry} object, only creating it
	 * if it doesn't already exist.
	 *
	 * @access public
	 * @param string	The path to the configuration file
	 * @param string	The type of the configuration file
	 * @return object JRegistry
	 */
	function &getConfig($file = null, $type = 'PHP')
	{
		static $instance;

		if (!is_object($instance))
		{
			if ($file === null) {
				$file = '../../config.php';
			}

			$instance = eFactory::_createConfig($file, $type);
		}

		return $instance;
	}

	function &getCache($group = '', $handler = 'callback', $storage = null)
	{
		$handler = ($handler == 'function') ? 'callback' : $handler;

		$conf =& eFactory::getConfig();

		if(!isset($storage)) {
			$storage = $conf->getValue('config.cache_handler', 'file');
		}

		$options = array(
			'defaultgroup' 	=> $group,
			'cachebase' 	=> $conf->getValue('config.cache_path'),
			'lifetime' 		=> $conf->getValue('config.cachetime') * 60,	// minutes to seconds
			'language' 		=> $conf->getValue('config.language'),
			'storage'		=> $storage
		);

		eimport('light-cache.cache');

		$cache =& eCache::getInstance( $handler, $options );
		$cache->setCaching($conf->getValue('config.caching'));
		return $cache;
	}



}