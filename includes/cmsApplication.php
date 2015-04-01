<?php
require_once('cmsBase.php');
class CmsApplication extends CmsBase {


function run(){ //isinya adalah index.php

{
	$method=(isset($_REQUEST['task'])) ? $_REQUEST['task']:'display'; //$mehod hanya digunakan di fungsi run
	//cara lain
	//if (isset($_REQUEST['task'])){
	//$method= $_REQUEST['task'];
	//}else
	//{
	//$method = 'display';
	//}
	$this->$method();
}


//$_REQUEST =variable php built in
//dari deklarasi diatas yang akan direquest adalah task 
//contoh pada localhost/index.php?task=any
//maka task akan merequest variable yang berisi any	
}

function display()
{
	echo 'tis is base disply';
}
}