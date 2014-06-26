if (typeof(redjs)=='undefined')
{
	// We will recreate our redjs namespace
	// with redjs.jQuery pointing to their jQuery.
	redjs = {
		jQuery: window.jQuery,
		extend: function(obj){
			this.jQuery.extend(this, obj);
		}
	}
}

redjs.extend({
	add : function(){
		
	},
	remove : function(){
		
	},
	edit : function(){
		
	}
});