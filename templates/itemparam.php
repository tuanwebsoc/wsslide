<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_wsslise
 *
 * @link     	http://template.websoc.vn
 * @copyright   Copyright (C) 2014 Social Network Solutions Co.,Ltd. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

?>
<div class="ui-state-default row">
	<div class="span4">
		<div class="input-prepend input-append">
			<div class="media-preview add-on">
			<span class="hasTipPreview" title=""><i class="icon-eye"></i></span>
			</div>

			<input type="text" name="jform[params][items][<?php echo $numbChilds ?>][image]" id="jform_images<?php echo $numbChilds ?>" value="" readonly="readonly" class="input-small" aria-invalid="false">
			<a class="modal btn" title="Select" href="javascript:void(0)"
			rel="{handler: 'iframe', size: {x: 800, y: 500}}"
			onclick="SqueezeBox.open('index.php?option=com_media&amp;view=images&amp;tmpl=component&amp;asset=com_content&amp;author=&amp;fieldid=jform_images<?php echo $numbChilds; ?>&amp;folder=',{handler: 'iframe',size: { x: 800, y: 500 }});return false;">
				Select
			</a>
			<a class="btn hasTooltip" title="" href="#"
			onclick="jInsertFieldValue('','jform_images<?php echo $numbChilds ?>');return false;"
			data-original-title="Clear">
				<i class="icon-remove"></i>
			</a>
		</div>
	</div>
	<div class="span5">
		Test
	</div>
</div>