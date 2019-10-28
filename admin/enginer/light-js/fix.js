    // Para IE6 - Background flicker fix
    try { document.execCommand('BackgroundImageCache', false, true);
        } catch(e) {}

    document.menu = null
    window.addEvent('load', function(){
	element = $('menu')

    if(!element.hasClass('disabled')) {
	var menu = new JMenu(element)
	document.menu = menu
	} } );