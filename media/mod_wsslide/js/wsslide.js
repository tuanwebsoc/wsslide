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
				template : "full",
				func     : "getItemsTemplate",
				counts	 : countChild
			}
		
		wsslide.jQuery.ajax({
			  type: "POST",
			  url: window.PATH_ROOT + window.AJAX_LOCATION,
			  data: datas,
			  success: function(response)
			  {
				 wsslide.jQuery(strElement).append(response);
			  }
		});
	},
	changeType : function(e, strElement){
		var datas = {
				template : e.value,
				func     : "getParamsTemplate"
		}
		
		wsslide.jQuery.ajax({
			  type: "POST",
			  url: window.PATH_ROOT + window.AJAX_LOCATION,
			  data: datas,
			  success: function(response)
			  {
				 wsslide.jQuery(strElement).html(response);
			  }
		});
	},
	remove : function(){
		
	},
	edit : function(){
		
	}
});