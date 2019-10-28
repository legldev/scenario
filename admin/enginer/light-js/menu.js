
var JMenu = new Class({
	initialize: function(el) {

    var elements = $ES('li', el);
	var nested = null
	for (var i=0; i<elements.length; i++) {
	    var element = elements[i];

	element.addEvent('mouseover', function(){ this.addClass('hover'); });
	element.addEvent('mouseout', function(){ this.removeClass('hover'); });

	//find nested UL
	nested = $E('ul', element);
	if(!nested) { continue; }

	//declare width
	var offsetWidth  = 0;

	//find longest child
	for (k=0; k < nested.childNodes.length; k++) {
	var node  = nested.childNodes[k]
	if (node.nodeName == "LI")
	    offsetWidth = (offsetWidth >= node.offsetWidth) ? offsetWidth :  node.offsetWidth; }

	//match longest child
	    for (l=0; l < nested.childNodes.length; l++) {
		var node = nested.childNodes[l]
		    if (node.nodeName == "LI") {
			    $(node).setStyle('width', offsetWidth+'px'); } }
                $(nested).setStyle('width', offsetWidth+'px'); } } } );