<?php
/**
 *
 */
JHtml::_('jquery.ui');
JHtml::_('jquery.ui', array('core', 'sortable'));
$doc = JFactory::getdocument();

// Add Css script
$doc->addStyleSheet(JURI::root() . "media/mod_wsslider/css/wsslider.css");

?>
<div class="ws-container">
	<div class="ws-buttons">
	    <button data-action="addnew" type="button" class="btn btn-default">Add</button>
	    <button type="button" class="btn btn-primary">Delete</button>
	    <button type="button" class="btn btn-success">Success</button>
	    <button type="button" class="btn btn-info">Info</button>
	    <button type="button" class="btn btn-warning">Warning</button>
	    <button type="button" class="btn btn-danger">Danger</button>
	    <button type="button" class="btn btn-link">Link</button>
	</div>
	<div class="ws-wrap">
		<ul id="ws-wrapparam">
		  <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 1</li>
		  <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 2</li>
		  <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 3</li>
		  <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 4</li>
		  <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 5</li>
		  <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 6</li>
		  <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 7</li>
		</ul>
	</div>
</div>

<script>
  jQuery(document).ready(function($) {
    $( "#ws-wrapparam" ).sortable();
    $( "#ws-wrapparam" ).disableSelection();
  });
</script>