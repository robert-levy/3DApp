<?php
class Load {
	function view($file_name, $data = null,$modelData = null)
	{
		if( is_array($data) ) {
			extract($data);
		}
		if( is_array($modelData) ) {
			extract($modelData);
		}
		include 'application/view/'.$file_name . '.php';
	}
}
?>