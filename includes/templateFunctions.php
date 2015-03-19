<?php 
require_once('cmsBase.php');
class TemplateFunctions extends CmsBase {
	// Semua fungsi terkait dengan
	// pengaturan template ada di sini

	var $templateName ='default'; //hanya dapat diakses di kelas templaeFunction
	function show(){
		require_once($this->getCurrentTemplatePath() . 'template.php');

	}
	function getCurrentTemplatePath(){
		//untuk mendapatkan nama folder tempat menyimpan TEMPLATE
		return 'templates/' . $this->templateName . '/';
	}
	function setTemplate($templateName){ //template disini adalah parameter
		$this->templateName = $templateName;
	}
	//fungsi untuk menggabungkan TEMPLATE
	//dengan management content
	function appOutput(){
		require_once('includes/cmsApplication.php');
		$app = new CmsApplication();
		$app->run();

	}
}
?>