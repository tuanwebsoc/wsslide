<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_banners
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/**
 * Helper for mod_wsslide
 *
 * @package     Joomla.Site
 * @subpackage  mod_wsslide
 * @since       3.3
 */
class ModWsslideHelper
{
	/**
	 * Retrieve list of banners
	 *
	 * @param   JRegistry  &$params  module parameters
	 *
	 * @return  mixed
	 */
	public static function getParamsTemplate()
	{
		$app = JFactory::getApplication("site");
		$input = $app->input;

		$template = new WSTemplate();

		$tmpl = $input->get("template");

		echo $template->fetch($tmpl);
	}

	public static function getItemsTemplate()
	{
		$app = JFactory::getApplication("site");
		$input = $app->input;

		// Get number child item
		$numbChilds = $input->get("counts");

		$template = new WSTemplate();

		echo $template->set("numbChilds", $numbChilds)
			->fetch("itemparam");
	}
}
