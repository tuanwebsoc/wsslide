<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_wsslise
 *
 * @link     	http://template.websoc.vn
 * @copyright   Copyright (C) 2014 Social Network Solutions Co.,Ltd. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Include the syndicate functions only once

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));
$data = $params->get("dataslide");

echo "<pre>";
	print_r($data);
echo "</pre>";
require JModuleHelper::getLayoutPath('mod_wsslide', $params->get('layout', 'default'));
