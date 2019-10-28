<?php



?>


  <script type="text/javascript" src="enginer/light-js/light_parset.js"></script>
  <script type="text/javascript" src="enginer/light-js/mootools.js"></script>
  <script type="text/javascript" src="enginer/light-js/modal.js"></script>
  <script type="text/javascript" src="/functions/calendar.js"></script>
  <script type="text/javascript" src="/functions/calendar-setup.js"></script>

  <script type="text/javascript">
		window.addEvent('domready', function(){ new Accordion($$('.panel h3.jpane-toggler'), $$('.panel div.jpane-slider'), {onActive: function(toggler, i) { toggler.addClass('jpane-toggler-down'); toggler.removeClass('jpane-toggler'); },onBackground: function(toggler, i) { toggler.addClass('jpane-toggler'); toggler.removeClass('jpane-toggler-down'); },duration: 300,opacity: false,alwaysHide: true}); });
		window.addEvent('domready', function(){ var JTooltips = new Tips($$('.hasTip'), { maxTitleChars: 50, fixed: false}); });
		window.addEvent('domready', function() {

			SqueezeBox.initialize({});

			$$('a.modal-button').each(function(el) {
				el.addEvent('click', function(e) {
					new Event(e).stop();
					SqueezeBox.fromElement(el);
				});
			});
		});
			function isBrowserIE() {
				return navigator.appName=="Microsoft Internet Explorer";
			}

			function jInsertEditorText( text, editor ) {
				if (isBrowserIE()) {
					if (window.parent.tinyMCE) {
						window.parent.tinyMCE.selectedInstance.selection.moveToBookmark(window.parent.global_ie_bookmark);
					}
				}
				tinyMCE.execInstanceCommand(editor, 'mceInsertContent',false,text);
			}

			var global_ie_bookmark = false;

			function IeCursorFix() {
				if (isBrowserIE()) {
					tinyMCE.execCommand('mceInsertContent', false, '');
					global_ie_bookmark = tinyMCE.activeEditor.selection.getBookmark(false);
				}
				return true;
			}
		window.addEvent('domready', function() {

			SqueezeBox.initialize({});

			$$('a.modal').each(function(el) {
				el.addEvent('click', function(e) {
					new Event(e).stop();
					SqueezeBox.fromElement(el);
				});
			});
		});
			function insertReadmore(editor) {
				var content = tinyMCE.get('text').getContent();
				if (content.match(/<hr\s+id=("|')system-readmore("|')\s*\/*>/i)) {
					alert('Ya hay un Leer más... El enlace que ya ha sido insertado. Solo se permite un enlace de ese tipo. La próxima vez usa {pagebreak} para paginar el contenido.');
					return false;
				} else {
					jInsertEditorText('<hr id="system-readmore" />', editor);
				}
			}

Calendar._DN = new Array ("Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo");Calendar._SDN = new Array ("Dom", "Lun", "Mar", "Mié", "Ju", "Vi", "Sáb", "Dom"); Calendar._FD = 0;	Calendar._MN = new Array ("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");	Calendar._SMN = new Array ("Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic");Calendar._TT = {};Calendar._TT["INFO"] = "Acerca del calendario";
 		Calendar._TT["ABOUT"] =
 "DHTML Date/Time Selector\n" +
 "(c) dynarch.com 2002-2005 / Author: Mihai Bazon\n" +
"For latest version visit: http://www.dynarch.com/projects/calendar/\n" +
"Distributed under GNU LGPL.  See http://gnu.org/licenses/lgpl.html for details." +
"\n\n" +
"Date selection:\n" +
"- Use the \xab, \xbb buttons to select year\n" +
"- Use the " + String.fromCharCode(0x2039) + ", " + String.fromCharCode(0x203a) + " buttons to select month\n" +
"- Hold mouse button on any of the above buttons for faster selection.";
Calendar._TT["ABOUT_TIME"] = "\n\n" +
"Time selection:\n" +
"- Click on any of the time parts to increase it\n" +
"- or Shift-click to decrease it\n" +
"- or click and drag for faster selection.";

		Calendar._TT["PREV_YEAR"] = "Haz clic para ir al año anterior. Haz clic y mantén presionado para listar los años.";Calendar._TT["PREV_MONTH"] = "Haz clic para ir al mes anterior. Haz clic y mantén presionado para listar los meses.";	Calendar._TT["GO_TODAY"] = "Ir a hoy";Calendar._TT["NEXT_MONTH"] = "Haz clic para ir al próximo mes. Haz clic y mantén presionado para listar los meses";Calendar._TT["NEXT_YEAR"] = "Haz clic para ir al próximo año. Haz clic y mantén presionado para listar los años.";Calendar._TT["SEL_DATE"] = "Seleccionar una fecha.";Calendar._TT["DRAG_TO_MOVE"] = "Arrástralo para moverlo";Calendar._TT["PART_TODAY"] = "(Hoy)";Calendar._TT["DAY_FIRST"] = "Mostrar %s primero";Calendar._TT["WEEKEND"] = "0,6";Calendar._TT["CLOSE"] = "Cerrar";Calendar._TT["TODAY"] = "Hoy";Calendar._TT["TIME_PART"] = "(Cambiar-)Haz clic o arrastrar para cambiar el valor.";Calendar._TT["DEF_DATE_FORMAT"] = "%Y-%M-%D"; Calendar._TT["TT_DATE_FORMAT"] = "%A, %B %E";Calendar._TT["WK"] = "se";Calendar._TT["TIME"] = "Fecha:";
window.addEvent('domready', function() {Calendar.setup({
        inputField     :    "detailscreated",     // id of the input field
        ifFormat       :    "%Y-%m-%d",      // format of the input field
        button         :    "detailscreated_img",  // trigger for the calendar (button ID)
        align          :    "Tl",           // alignment (defaults to "Bl")
        singleClick    :    true
    });});
window.addEvent('domready', function() {Calendar.setup({
        inputField     :    "detailspublish_up",     // id of the input field
        ifFormat       :    "%Y-%m-%d",      // format of the input field
        button         :    "detailspublish_up_img",  // trigger for the calendar (button ID)
        align          :    "Tl",           // alignment (defaults to "Bl")
        singleClick    :    true
    });});
window.addEvent('domready', function() {Calendar.setup({
        inputField     :    "detailspublish_down",     // id of the input field
        ifFormat       :    "%Y-%m-%d",      // format of the input field
        button         :    "detailspublish_down_img",  // trigger for the calendar (button ID)
        align          :    "Tl",           // alignment (defaults to "Bl")
        singleClick    :    true
    });});
function keepAlive( ) {	var myAjax = new Ajax( "index.php", { method: "get" } ).request();} window.addEvent("domready", function(){ keepAlive.periodical(840000 ); });
  </script>
  <script type="text/javascript" src="/enginer/light-plugins/tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
	<script type="text/javascript">
				tinyMCE.init({
					// General
					directionality: "ltr",
					editor_selector : "mce_editable",
					language : "es",
					mode : "specific_textareas",
					skin : "default",
					theme : "advanced",
					// Cleanup/Output
					inline_styles : true,
					gecko_spellcheck : true,
					cleanup : true,
					cleanup_on_startup : false,
					entity_encoding : "raw",
					extended_valid_elements : "hr[id|title|alt|class|width|size|noshade|style],img[class|src|border=0|alt|title|hspace|vspace|width|height|align|onmouseover|onmouseout|name|style],a[id|class|name|href|target|title|onclick|rel|style]",
					force_br_newlines : false, force_p_newlines : true, forced_root_block : 'p',
					invalid_elements : "applet",
					// URL
					relative_urls : true,
					remove_script_host : false,
					document_base_url : "<?php echo $dirw;?>",
					// Layout
					content_css : "media/styles/editor.css",
					// Advanced theme
					theme_advanced_toolbar_location : "top",
					theme_advanced_toolbar_align : "left",
					theme_advanced_source_editor_height : "550",
					theme_advanced_source_editor_width : "750",
					theme_advanced_statusbar_location : "bottom", theme_advanced_path : true
				});
				</script>






	<script type="text/javascript" src="enginer/light-js/menu.js"></script>
	<script type="text/javascript" src="enginer/light-js/fix.js"></script>

<script language="javascript" type="text/javascript">
	function setFocus() {
		document.login.username.select();
		document.login.username.focus();
	}

</script>
</head>