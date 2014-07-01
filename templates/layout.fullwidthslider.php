<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_wsslise
 *
 * @link     	http://template.websoc.vn
 * @copyright   Copyright (C) 2014 Social Network Solutions Co.,Ltd. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
$check = true;

if (empty($config))
{
	$check = false;
}
?>
<table class="table table-bordered">
	<tr>
		<th>Options</th>
		<th>Parameter</th>
	</tr>
	<tr>
		<td>$FillMode</td>
		<td>
			<?php
				$arrayVal = array("0", "1", "2", "3", "4", "5");
			?>
			<select name="jform[params][dataslide][type][config][$FillMode]">
				<?php foreach($arrayVal as $val) :?>
					<?php
						if ($check)
						{
							$selected = '';
							if ($config['$FillMode'] == $val)
							{
								$selected = "selected='selected'";
							}
						}
					?>
				  	<option value="<?php echo $val; ?>" <?php if ($selected != "") echo $selected; ?>><?php echo $val?></option>
				 <?php endforeach; ?>
			</select>
		</td>
	</tr>
	<tr>
		<td>$AutoPlay</td>
		<td>
			<?php
				$arrayVal = array("false", "true");
			?>
			<select name="jform[params][dataslide][type][config][$AutoPlay]">
				<?php foreach($arrayVal as $val) :?>
					<?php
						if ($check)
						{
							$selected = '';
							if ($config['$AutoPlay'] == $val)
							{
								$selected = "selected='selected'";
							}
						}
					?>
				  	<option value="<?php echo $val; ?>" <?php if ($selected != "") echo $selected; ?>><?php echo $val?></option>
				 <?php endforeach; ?>
			</select>
		</td>
	</tr>
	<tr>
		<td>$AutoPlayInterval</td>
		<td>
			<?php
				$value = "3000";

				if ($check && !empty($value))
				{
					$value = $config['$AutoPlayInterval'];
				}
			?>
			<input type="text" name="jform[params][dataslide][type][config][$AutoPlayInterval]" placeholder="Type something…" value="<?php echo $value;?>">
		</td>
	</tr>
	<tr>
		<td>$PauseOnHover</td>
		<td>
			<?php
				$arrayVal = array("0", "1", "2", "3");
			?>
			<select name="jform[params][dataslide][type][config][$PauseOnHover]">
				<?php foreach($arrayVal as $val) :?>
					<?php
						if ($check)
						{
							$selected = '';

							if ($config['$PauseOnHover'] == $val)
							{
								$selected = "selected='selected'";
							}
						}
					?>
				  	<option value="<?php echo $val; ?>" <?php if ($selected != "") echo $selected; ?>><?php echo $val?></option>
				 <?php endforeach; ?>
			</select>
		</td>
	</tr>
	<tr>
		<td>$ArrowKeyNavigation</td>
		<td>
			<select name="jform[params][type][config][$ArrowKeyNavigation]">
			  <option value="false">false</option>
			  <option value="true">true</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>$SlideDuration</td>
		<td><input type="text" name="jform[params][type][config][$SlideDuration]" placeholder="Type something…"></td>
	</tr>
	<tr>
		<td>$MinDragOffsetToSlide</td>
		<td><input type="text" name="jform[params][type][config][$MinDragOffsetToSlide]" placeholder="Type something…"></td>
	</tr>
	<tr>
		<td>$SlideSpacing</td>
		<td><input type="text" name="jform[params][type][config][$SlideSpacing]" placeholder="Type something…"></td>
	</tr>
	<tr>
		<td>$DisplayPieces</td>
		<td><input type="text" name="jform[params][type][config][$SlideSpacing]" placeholder="Type something…"></td>
	</tr>
	<tr>
		<td>$ParkingPosition</td>
		<td><input type="text" name="jform[params][type][config][$SlideSpacing]" placeholder="Type something…"></td>
	</tr>
	<tr>
		<td>$UISearchMode</td>
		<td><input type="text" name="jform[params][type][config][$SlideSpacing]" placeholder="Type something…"></td>
	</tr>
	<tr>
		<td>$PlayOrientation</td>
		<td><input type="text" name="jform[params][type][config][$SlideSpacing]" placeholder="Type something…"></td>
	</tr>
</table>

var options = {
                $FillMode: 2,                                       //[Optional] The way to fill image in slide, 0 stretch, 1 contain (keep aspect ratio and put all inside slide), 2 cover (keep aspect ratio and cover whole slide), 4 actual size, 5 contain for large image, actual size for small image, default value is 0
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlayInterval: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, default value is 1

                $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
             ** $SlideEasing: $JssorEasing$.$EaseOutQuint,          //[Optional] Specifies easing for right to left animation, default value is $JssorEasing$.$EaseOutQuad
                $SlideDuration: 1200,                               //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
                $DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                $CaptionSliderOptions: {                            //[Optional] Options which specifies how to animate caption
                    $Class: $JssorCaptionSlider$,                   //[Required] Class to create instance to animate caption
                    $CaptionTransitions: _CaptionTransitions,       //[Required] An array of caption transitions to play caption, see caption transition section at jssor slideshow transition builder
                    $PlayInMode: 1,                                 //[Optional] 0 None (no play), 1 Chain (goes after main slide), 3 Chain Flatten (goes after main slide and flatten all caption animations), default value is 1
                    $PlayOutMode: 3                                 //[Optional] 0 None (no play), 1 Chain (goes before main slide), 3 Chain Flatten (goes before main slide and flatten all caption animations), default value is 1
                },

                $BulletNavigatorOptions: {                          //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                 //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 1,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                    $SpacingX: 8,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 8,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                    $Orientation: 1                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                },

                $ArrowNavigatorOptions: {                           //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$,                  //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 1,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
                }
            };