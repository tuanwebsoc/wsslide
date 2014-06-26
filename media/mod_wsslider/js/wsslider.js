if (typeof(wsslider)=='undefined')
{
	// We will recreate our redjs namespace
	// with redjs.jQuery pointing to their jQuery.
	wsslider = {
		jQuery: window.jQuery,
		extend: function(obj){
			this.jQuery.extend(this, obj);
		}
	}
}

wsslider.extend({
	init : {
		
	},
	add : function(){
		
	},
	remove : function(){
		
	},
	edit : function(){
		
	}
});