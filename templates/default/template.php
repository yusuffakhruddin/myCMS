<!DOCTYPE html>
<html>
<head>
	<title>Mata Kuliah CMS</title>
	<link rel="stylesheet" type="text/css" href=" <?php echo $this->
	getCurrentTemplatePath();?>/css/style.css"/>
</head>
<body>
<div class="wrapper">
	<div class="header">Yusuf Fakhruddin</div>
	<div class="clear"></div>   
	<div class="sidebar">Disini letak tesk bagian sisi halam web</div>
	<div class="content"><?php echo $this->appOutput();?> </div>
	<div class="clear"></div> 
	<div class="footer">Tesk bagian footer</div>
</div>

</body>
</html>