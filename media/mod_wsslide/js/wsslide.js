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
	add : function(){
		
	},
	remove : function(){
		
	},
	edit : function(){
		
	}
});