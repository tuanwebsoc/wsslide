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
		var datas = {
				method : "getTemplate",
				option : "com_ajax",
				module : "wsslide",
				format : "json",
				Itemid : "103"
			}
		
		wsslide.jQuery.ajax({
			  type: "POST",
			  url: "index.php",
			  data: datas,
			  success: function(response){
				 console.log(response);
			  }
		});
	},
	remove : function(){
		
	},
	edit : function(){
		
	}
});