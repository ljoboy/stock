<?php
if (!function_exists('current_page')){
	function current_page($page){
		$uri = explode('/', uri_string());
		if (uri_string() == $page || $uri[0] == $page)
			return 'active';
		return '';
	}
}
