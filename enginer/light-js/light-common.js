/*----------------------------------------------------------------------------------------
    (C) 2015 Something Special | DoItSpecial.com | soporte@doitspecial.com
    light-common.js | v 1.0 | date: 02/07/2015
----------------------------------------------------------------------------------------*/

    function $(element) {
	if (typeof(element) == "string")
		element = document.getElementById(element);
	return 	element; }

    function showHelp(element) {
	var element = $(element);
	var box = $(element.id + "_text");

	box.style.display = "block";
	box.style.marginTop = "-" + box.offsetHeight + "px"; }

    function hideHelp(element) {
	var element = $(element);
	$(element.id + "_text").style.display = "none"; }