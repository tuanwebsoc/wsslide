<?php
/**
 * @author		JoomForest.com
 * @email		support@joomforest.com
 * @website		http://www.joomforest.com
 * @copyright	Copyright (C) 2013-2014 JoomForest. All rights reserved.
 * @license		http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

jimport('joomla.form.formfield');

require_once JPATH_ROOT . '/modules/mod_wsslider/libraries/template.php';

class JFormFieldWsslider extends JFormField
{
    protected $type = 'wsslider';

    protected function getInput()
    {
    	// Get template
    	$template = new WTemplate();

    	$html = $template->fetch("admin.php");

        return $html;
    }
}
// EOF