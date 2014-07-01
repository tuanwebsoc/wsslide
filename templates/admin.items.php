<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_wsslise
 *
 * @link     	http://template.websoc.vn
 * @copyright   Copyright (C) 2014 Social Network Solutions Co.,Ltd. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

$template = new WSTemplate();
$i = 0;
?>
<?php foreach ($items as $key => $item) : ?>
	<?php
		echo $template	->set("item", $item)
						->set("index", $i)
						->fetch("admin.itemparam");
		$i++;
	?>
<?php endforeach; ?>