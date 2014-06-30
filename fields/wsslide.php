<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_wsslise
 *
 * @link     	http://template.websoc.vn
 * @copyright   Copyright (C) 2014 Social Network Solutions Co.,Ltd. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

jimport('joomla.form.formfield');

require_once JPATH_ROOT . '/modules/mod_wsslide/libraries/template.php';

class JFormFieldwsslide extends JFormField
{
    protected $type = 'wsslide';

    protected function getInput()
    {
    	// Get template
    	$template = new WSTemplate();

    	$html = $template->fetch("admin");

        return $html;
    }
}
// EOF