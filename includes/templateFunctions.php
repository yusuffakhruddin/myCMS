<?php 

require_once('cmsBase.php');
class TemplateFunctions extends CmsBase {

	var $templateName = 'default';
	var $widgetPositions = array();

	function show() {
		require_once($this->getCurrentTemplatePath() . 'template.php');
	}

	function getCurrentTemplatePath() {
		//untuk mendapatkan nama folder tempat menyimpan TEMPLATE
		return 'templates/' . $this->templateName . '/';
	}

	function setTemplate($templateName) {
		$this->templateName = $templateName;
	}


	//fungsi untuk menggabungkan TEMPLATE
	//dengan mangement CONTENT
	function appOutput()
{
	$appname = (isset($_REQUEST['app']))?$_REQUEST['app']:'default';
	require_once('apps/'.$appname.'/'.$appname.'.php');
	$application = ucfirst($appname).'Application';
	$app = new $application();
	$app->run();
}


	function widgetOutput($position='default') {
		//echo 'Di sini akan ditampilkan widget secara dinamis';
		if(!empty($this->widgetPositions[$position]))
		{
			$widgets=$this->widgetPositions[$position];
			foreach($widgets as $widgetName)
			{
				require_once('widgets/'.$widgetName.'/'.$widgetName.'.php');
				$widgetclass=ucfirst($widgetName).'Widget';
				$widget=new $widgetclass();
				$widget->run($widgetName);
			}
		}
	}

	function setWidget($position,$widgetName)
	{
		if(empty($this->widgetPositions[$position]))
		{
			$this->widgetPositions[$position]=array($widgetName);
		} else {
			array_push($this->widgetPositions[$position],$widgetName);
		}
	}
}