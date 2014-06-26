<?php
/**
 *
 */
JHtml::_('jquery.ui');
JHtml::_('jquery.ui', array('core', 'sortable'));
$doc = JFactory::getdocument();
// Add script js and css grid

?>
<div class="ws-container">
	<div class="bs-example">
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
<style>
  #sortable { list-style-type: none; margin: 0; padding: 0; width: 60%; }
  #sortable li { margin: 0 3px 3px 3px; padding: 0.4em; padding-left: 1.5em; font-size: 1.4em; height: 18px; }
  #sortable li span { position: absolute; margin-left: -1.3em; }
  .ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default{
  	border: 1px solid #d3d3d3;
	background: #e6e6e6 url(images/ui-bg_glass_75_e6e6e6_1x400.png) 50% 50% repeat-x;
	font-weight: normal;
	color: #555555;
  }
</style>
<script>
  jQuery(document).ready(function($) {
    $( "#sortable" ).sortable();
    $( "#sortable" ).disableSelection();
  });
</script>