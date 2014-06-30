<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_wsslise
 *
 * @link     	http://template.websoc.vn
 * @copyright   Copyright (C) 2014 Social Network Solutions Co.,Ltd. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

JHtml::_('behavior.framework', true);
JHtml::_('behavior.modal');

// Include jQuery
JHtml::_('jquery.framework');
JHtml::_('jquery.ui');
JHtml::_('jquery.ui', array('core', 'sortable'));

$doc = JFactory::getdocument();

// Add Css script
$doc->addStyleSheet(JURI::root() . "media/mod_wsslide/css/wsslide.css");
$doc->addScript(JURI::root() . "media/mod_wsslide/js/wsslide.js");
$doc->addScriptDeclaration("
		window.PATH_ROOT = '" . JURI::root() . "';
		window.AJAX_LOCATION = '/modules/mod_wsslide/templates/admin.corecontroller.php'"
);

// Build the script.
$script = array();
$script[] = '	function jInsertFieldValue(value, id) {';
$script[] = '		var $ = jQuery.noConflict();';
$script[] = '		var old_value = $("#" + id).val();';
$script[] = '		if (old_value != value) {';
$script[] = '			var $elem = $("#" + id);';
$script[] = '			$elem.val(value);';
$script[] = '			$elem.trigger("change");';
$script[] = '			if (typeof($elem.get(0).onchange) === "function") {';
$script[] = '				$elem.get(0).onchange();';
$script[] = '			}';
$script[] = '			jMediaRefreshPreview(id);';
$script[] = '		}';
$script[] = '	}';

$script[] = '	function jMediaRefreshPreview(id) {';
$script[] = '		var $ = jQuery.noConflict();';
$script[] = '		var value = $("#" + id).val();';
$script[] = '		var $img = $("#" + id + "_preview");';
$script[] = '		if ($img.length) {';
$script[] = '			if (value) {';
$script[] = '				$img.attr("src", "' . JUri::root() . '" + value);';
$script[] = '				$("#" + id + "_preview_empty").hide();';
$script[] = '				$("#" + id + "_preview_img").show()';
$script[] = '			} else { ';
$script[] = '				$img.attr("src", "")';
$script[] = '				$("#" + id + "_preview_empty").show();';
$script[] = '				$("#" + id + "_preview_img").hide();';
$script[] = '			} ';
$script[] = '		} ';
$script[] = '	}';

$script[] = '	function jMediaRefreshPreviewTip(tip)';
$script[] = '	{';
$script[] = '		var $ = jQuery.noConflict();';
$script[] = '		var $tip = $(tip);';
$script[] = '		var $img = $tip.find("img.media-preview");';
$script[] = '		$tip.find("div.tip").css("max-width", "none");';
$script[] = '		var id = $img.attr("id");';
$script[] = '		id = id.substring(0, id.length - "_preview".length);';
$script[] = '		jMediaRefreshPreview(id);';
$script[] = '		$tip.show();';
$script[] = '	}';

// Add the script to the document head.
JFactory::getDocument()->addScriptDeclaration(implode("\n", $script));

?>
	<div class="ws-container">
		<div class="ws-buttons">
		    <button data-action="addnew" type="button" class="btn btn-default" onclick="wsslide.addItem(this, '#ws-wrapparam')"><?php echo JText::_("MOD_WSSLIDE_BTN_ADD"); ?></button>
		    <button type="button" class="btn btn-success">Success</button>
		    <button type="button" class="btn btn-info">Info</button>
		    <button type="button" class="btn btn-warning">Warning</button>
		    <button type="button" class="btn btn-danger">Danger</button>
		    <button type="button" class="btn btn-link">Link</button>
		    <select name="jform[params][type]" onchange="wsslide.changeType(this, '#ws-configuration')">
		    	<option value="none"><?php echo JText::_("MOD_WSSLIDE_LAYOUT_ADMIN_SELECT_TYPE"); ?></option>
		    	<?php
		    		$optionType = array(
						"layout.fullwidthslider" =>"Full Width Slider",
						"layout.imageslider" =>"Image Slider",
						"layout.simplefadelayout" =>"Simple Fade Layout",
						"layout.bannerslider" =>"Banner Slider",
						"layout.imagegallery" =>"Image Gallery"
					);
		    	?>

		    	<?php foreach ($optionType as $key => $label) : ?>
		    		<option value="<?php echo $key; ?>"><?php echo $label; ?></option>
		    	<?php endforeach; ?>
		    </select>
		</div>

		<div class="ws-wrap row">
			<div id="ws-wrapparam" class="span9">
			</div>
			<div id="ws-configuration" class="span3">
			</div>
		</div>
	</div>

<script>
  jQuery(document).ready(function($) {
    $( "#ws-wrapparam" ).sortable();
    $( "#ws-wrapparam" ).disableSelection();
  });
</script>