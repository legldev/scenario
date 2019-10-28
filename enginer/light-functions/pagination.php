<?php /*----------------------------------------------------------------------------------
    (C) 2015 Something Special | DoItSpecial.com | soporte@doitspecial.com
    pagination.php | v 1.0 | date: 02/07/2015
----------------------------------------------------------------------------------------*/
    defined('_EXEC') or die('Acceso Denegado');
    
class paginar {
	# Obtener el total de resultados
    function mostrar($a) {
    $this->mostrar = $a; }

	function paginar($a) {
	$this->codigo = $a;

	$con = mysql_query(preg_replace('~ (SELECT) (.+) (FROM) ~ ','SELECT COUNT $2 FROM',$this->codigo));
	$this->total_resultados = mysql_result($con,0,0); }

    // Procesar Codigo SQL
	function procesar_codigo() {
	$this->total_pag = ceil($this->total_resultados/$this->mostrar);

        if (isset($_GET['pag'])) { $pag = $_GET['pag']; } else {  $pag = ''; }

	switch(true) {
	    case $pag < 1:
	        $pag = 1;
		    break;

        case $pag > $this->total_pag:
		    $pag = $this->total_pag;
}

    $desde = preg_match('~[0-9]~',$pag) ? ($pag - 1) * $this->mostrar : 0;
	$con = mysql_query($this->codigo." LIMIT $desde,$this->mostrar");
	return $con; }


    // Procesar URL evitando repetir varias veces la variable de página (ej. index.php?id=noticias&n=1&pag=1)
	function url() {
	    foreach ($_GET as $nombre => $valor) {
			if ($nombre != 'pag') {
				$valor = urlencode($valor) ;
				$url .= $nombre.'='.$valor.'&' ;
}}

    return $url ;
    global $url;
}

	function crear_paginas() {
	  	    if (isset($_GET['pag'])) { $pag_get2 = $_GET['pag']; } else {  $pag_get2 = 1; }

		# Para los que usan enlaces tipo www.pagina.com/?seccion=descargas
		if(strstr($_SERVER["PHP_SELF"],'/index.php')) {
			$_SERVER["PHP_SELF"] = str_replace('/index.php','/',$_SERVER["PHP_SELF"]) ;
		}
		$max_paginas = 8;
		$url = $this->url();
		$pag_anterior = $pag_get2 - 1;
		if($pag_anterior >= 1) {
			$paginas_begun[] = '<div class="button2-right"><div class="start"><a href="'.$_SERVER["PHP_SELF"].'?'.$url.'pag=1" title="Inicio">Inicio</a></div></div>' ;
			$paginas_begun[] = '<div class="button2-right"><div class="prev"><a href="'.$_SERVER["PHP_SELF"].'?'.$url.'pag='.$pag_anterior.'" title="Anterior">Anterior</a></div></div>' ;
		} else {
            $paginas_begun[] = '<div class="button2-right off"><div class="start"><span>Inicio</span></div></div>' ;
		    $paginas_begun[] = '<div class="button2-right off"><div class="prev"><span>Anterior</span></div></div>' ;
}
		if($this->total_pag > $max_paginas) {
			$this->total_pag_mostrar = $max_paginas ;
		}
		else {
			$this->total_pag_mostrar = $this->total_pag;
		}
		$pag_desde = ($pag_get2-$max_paginas/2) ;
		if($pag_desde < 1) {
			$pag_desde = 1 ;
		}
		$pag_hasta = ($pag_get2+$max_paginas/2) ;

		if($pag_hasta > $this->total_pag) {
			$pag_hasta = $this->total_pag ;
		}
		for($a = $pag_desde ; $a <= $pag_hasta ; $a++) {
			$multi_pg[] = ($a != $pag_get2) ? '<a href="'.$_SERVER["PHP_SELF"].'?'.$url.'pag='.$a.'" title="'.$a.'">'.$a.'</a>' : '<span>'.$a.'</span>' ;
 		}
		$pag_siguiente = $pag_get2 + 1 ;
		if($pag_siguiente <= $this->total_pag) {

			$paginas_last[] = '<div class="button2-left"><div class="next"><a href="'.$_SERVER["PHP_SELF"].'?'.$url.'pag='.$pag_siguiente.'" title="Siguiente">Siguiente</a></div></div>' ;
			$paginas_last[] = '<div class="button2-left"><div class="end"><a href="'.$_SERVER["PHP_SELF"].'?'.$url.'pag='.$this->total_pag.'" title="Final">Final</a></div></div>' ;
		}  else {
         	$paginas_last[] = '<div class="button2-left off"><div class="next"><span>Siguiente</span></div></div>' ;
			$paginas_last[] = '<div class="button2-left off"><div class="end"><span>Final</span></div></div>' ;
		}
		$paginas =
		'<div class="pagination">

<div class="limit">Mostrar núm.<select name="limit" id="limit" class="inputbox" size="1" onchange="submitform();"><option value="5" selected="selected">5</option><option value="10" >10</option><option value="15" >15</option><option value="20" >20</option><option value="25" >25</option><option value="30" >30</option><option value="50" >50</option><option value="100" >100</option><option value="0" >Todos</option></select></div>
'.@implode($paginas_begun).'<div class="button2-left"><div class="page">'.@implode($multi_pg).'</div></div>'.@implode($paginas_last).'<div class="limit">Página '.$pag_get2.' de '.$this->total_pag.'</div>
<input type="hidden" name="limitstart" value="0" />
</div>' ;
		echo $paginas ;
	}
}

?>