<?php
require_once('cmsBase.php');
class CmsApplication extends CmsBase {
//Anything here will be accesible in main functionality of CMS


function run(){ //isinya adalah index.php
	if (isset($_REQUEST['task'])) { //isset = memastikan varible sudah ada isi atau sudah dideklarasi, jika belum dideklarasi hasilnya false
	$task = $_REQUEST['task']; //localhost/index.php?task=addcontent artinya task yang berisi addcontent
		switch ($task) {
			case 'addcontent':
			$this->addcontent();
			break;
			case 'anyothertask':
			$this->anyothertask();
			break;
			default :
			$this->viewcontent();
			break;
}
//$_REQUEST =variable php built in
//dari deklarasi diatas yang akan direquest adalah task 
//contoh pada localhost/index.php?task=any
//maka task akan merequest variable yang berisi any	
} else {
	$this->viewcontent(); //memanggil fungsi yg berada di dalam app
	}
}

function addcontent() {
echo 'here add content functionality will takes palces';
}
function viewcontent() {
echo 'here view content functionality will takes place';
}
function anyothertask() {
echo 'this is another task here can be written a complete php program against that task';
}
}