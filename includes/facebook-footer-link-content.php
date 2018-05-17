<?php

function ffl_add_footer($content)
{
	$footer_content= '<hr>';
	return $content.'Hello world';

}

add_filter('the_content', 'ffl_add_footer');
?>