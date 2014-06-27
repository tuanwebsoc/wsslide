<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_wsslise
 *
 * @link     	http://template.websoc.vn
 * @copyright   Copyright (C) 2014 Social Network Solutions Co.,Ltd. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

JHtml::_('jquery.ui');
JHtml::_('jquery.ui', array('core', 'sortable'));
$doc = JFactory::getdocument();

// Add Css script
$doc->addStyleSheet(JURI::root() . "media/mod_wsslide/css/wsslide.css");
$doc->addScript(JURI::root() . "media/mod_wsslide/js/wsslide.js");

?>
<div class="ws-container">
	<div class="ws-buttons">
	    <button data-action="addnew" type="button" class="btn btn-default" onclick="wsslide.addItem(this, '#ws-wrapparam')">Add</button>
	    <button type="button" class="btn btn-success">Success</button>
	    <button type="button" class="btn btn-info">Info</button>
	    <button type="button" class="btn btn-warning">Warning</button>
	    <button type="button" class="btn btn-danger">Danger</button>
	    <button type="button" class="btn btn-link">Link</button>
	</div>
	<div class="ws-wrap">
		<ul id="ws-wrapparam">
		  <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 1</li>
		</ul>
	</div>
</div>

<script>
  jQuery(document).ready(function($) {
    $( "#ws-wrapparam" ).sortable();
    $( "#ws-wrapparam" ).disableSelection();
  });
</script>