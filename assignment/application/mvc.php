<?php
require 'view/load.php';
require 'model/model.php';
require 'controller/controller.php';
$pageURI =$_SERVER['REQUEST_URI'];
$pageURI =substr($pageURI,strrpos($pageURI,'index.php')+10);  //this fails when putting a '/' at the end of any url
	if (!$pageURI)
		new Controller('home');
	else
		new Controller($pageURI);

    //include 'application/view/virtual_museum.php';

?>