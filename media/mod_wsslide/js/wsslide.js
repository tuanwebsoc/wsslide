if (typeof(wsslide)=='undefined')
{
	// We will recreate our redjs namespace
	// with redjs.jQuery pointing to their jQuery.
	wsslide = {
		jQuery: window.jQuery,
		extend: function(obj){
			this.jQuery.extend(this, obj);
		}
	}
}

wsslide.extend({
	init : {
		
	},
	addItem : function(e, strElement){
		
		// Count child element for Parent Element
		var countChild 	 	= wsslide.jQuery(strElement).children(".row").length;
		var datas = {
				template : "getFullWidthSlider",
				counts	 : countChild
			}
		
		
		wsslide.jQuery.ajax({
			  type: "POST",
			  url: window.PATH_ROOT + "/modules/mod_wsslide/templates/corecontroller.php",
			  data: datas,
			  success: function(response)
			  {
				 wsslide.jQuery(strElement).append(response);
			  }
		});
	},
	remove : function(){
		
	},
	edit : function(){
		
	}
});