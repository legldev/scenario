<?php /*----------------------------------------------------------------------------------
    (C) 2015 Something Special | DoItSpecial.com | soporte@doitspecial.com
    html.php | v 1.0 | date: 02/07/2015
----------------------------------------------------------------------------------------*/

function tag($type = '', $comment = '', $class = '') {
    if($type=='b') { $t = '<body>'; }
    if($type=='h') { $t = '<header>'; }
    if(empty($comment)) { $com = ''; } else { $com = '<!--'.$comment.'-->'; }
    echo $t.$com;
}

function tag_end($type = '', $comment = '') {
    if($type=='b') { $t = '</body>'; }
    if($type=='h') { $t = '</header>'; }
    if(empty($comment)) { $com = ''; } else { $com = '<!--'.$comment.'-->'; }
    echo $t.$com;
}

function p_class_begin($class = '', $comment = '') {
    if(empty($comment)) { $com = ''; } else { $com = '<!--'.$comment.'-->'; }
    if(empty($class)) { $cs = ''; } else { $cs = ' class="'.$class.'"'; }
    return '<p'.$cs.'>'.$com;
}

function p_end($comment = '') {
    if(empty($comment)) { $com = ''; } else { $com = '<!--'.$comment.'-->'; }
    return '</p>'.$com;
}

function d_begin($class = '', $comment = '') {
    if(empty($comment)) { $com = ''; } else { $com = '<!--'.$comment.'-->'; }
    if(empty($class)) { $cs = ''; } else { $cs = ' class="'.$class.'"'; }
    echo '<div'.$cs.'>'.$com;
}

function d_begin_id($id = '', $comment = '') {
    if(empty($comment)) { $com = ''; } else { $com = '<!--'.$comment.'-->'; }
    if(empty($id)) { $idd = ''; } else { $idd = ' id="'.$id.'"'; }
    echo '<div'.$idd.'>'.$com;
}

function d_end($comment = '') {
    if(empty($comment)) { $com = ''; } else { $com = '<!--'.$comment.'-->'; }
    echo '</div>'.$com;
}

function sec_head($head = '', $subhead = '') {
    echo '<div class="section_head"><div id="section_title">'.$head.'</div></div>
    <div class="section_subhead"><div id="section_subtitle">'.$subhead.'</div></div>';
}

function br_separator() {
    echo '<br><br><div class="clear"></div><div class="clear-separator"></div>';
}

function br_separator2() {
    echo '<div class="clear"></div><div class="clear-separator"></div><br><br>';
}

function separator() {
    echo '<div class="clear"></div><div class="clear-separator"></div>';
}

function clear() {
    echo '<div class="clear"></div>';
}

function sep() {
    echo '<div class="clear-separator"></div>';
}

function clear_separator() {
    echo '<div class="clear"></div><div class="clear-separator"></div>';
}

function share_it($link = '', $title = '') {

echo '
<div class="share_buttons">
<a href="http://www.facebook.com/sharer.php?u='.$link.'" target="_blank" title="Compartir en Facebook"><img alt="Facebook" onmouseout="this.style.opacity=0.5;this.filters.alpha.opacity=50"
onmouseover="this.style.opacity=1;this.filters.alpha.opacity=100" src="media/images/social/fb.png" style="opacity: 0.5;" border="0"></a>

<a href="http://www.twitter.com/?status='.$link.'" target="_blank" title="Compartir en Twitter"><img alt="Twitter" onmouseout="this.style.opacity=0.5;this.filters.alpha.opacity=50"
onmouseover="this.style.opacity=1;this.filters.alpha.opacity=100" src="media/images/social/tw.png" style="opacity: 0.5;" border="0"></a>

<a href="http://reddit.com/submit?url='.$link.'&amp;title='.$title.'" target="_blank" title="Compartir en Reddit"><img alt="Reddit" onmouseout="this.style.opacity=0.5;this.filters.alpha.opacity=50"
onmouseover="this.style.opacity=1;this.filters.alpha.opacity=100" src="media/images/social/rd.png" style="opacity: 0.5;" border="0"></a>

</div>';

}
?>