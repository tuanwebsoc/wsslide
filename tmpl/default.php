<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_archive
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$doc = JFactory::getDocument();

$doc->addScript(JUri::root() . "/modules/mod_wsslider/assets/angular.min.js");
?>
<div ng-app = "firstapp">
	<div ng-controller='ngAppDemoController'>
		<input ng-model='greeting.text' ng-change="change()">
		<p>{{greeting.text}}, World</p>
	</div>
</div>

<script type="text/javascript">
	angular.module('firstapp', []).controller('ngAppDemoController', function($scope, $http) {

		$scope.change = function(){
			// Load Ajax
			var request = $http({
				method: "post",
                url: "<?php echo JURI::base(); ?>index.php",
                params : {
                	option : 'com_ajax',
        			plugin : 'GetList',
        			format : 'json',
        			word   : $scope.greeting.text
                }
			});

			request.then(function(q){
				console.log(q);
			},
			function (e){
				console.log(e);
			})
		}
	});
</script>
