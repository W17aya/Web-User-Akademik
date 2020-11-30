<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>STMIK Kian Santang</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>design/js/themes/grayd/easyui.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>design/js/themes/icon.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>design/js/themes/base/jquery.ui.all.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>design/css/site.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>design/js/DataTables-1.9.1/media/css/jquery.dataTables_themeroller.css">
	<script type="text/javascript" src="<?php echo base_url();?>design/js/jquery-1.7.2.min.js" charset="utf-8"></script>
	<script type="text/javascript" src="<?php echo base_url();?>design/js/jquery.easyui.min.js" charset="utf-8"></script>
	<script type="text/javascript" src="<?php echo base_url();?>design/js/mod_main.js" charset="utf-8"></script>
	<script type="text/javascript" src="<?php echo base_url();?>design/js/ui/jquery.ui.core.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>design/js/ui/jquery.ui.widget.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>design/js/ui/jquery.ui.position.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>design/js/ui/jquery.ui.autocomplete.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>design/js/DataTables-1.9.1/media/js/jquery.dataTables.min.js" charset="utf-8"></script>
</head>
<body class="easyui-layout" border="false">
	<div region="center" split="false" style="background-color:#ffffff;">
		<div id="wrapper" style="height:100%; margin:0 auto;">
			<div class="easyui-layout" border="false" fit="true" style="overflow:hidden">
				<div region="north" split="false" style="height:110px; background-color:#ffffff; overflow:hidden">
					<div class="header" style="height:80px;">
						<div class="logo" style="height:50px">
							<img src="<?php echo base_url();?>design/css/image/cooltext716980926 - Copy.png">
						</div>
					</div>
						<?php echo $tMenu; ?>
				</div>
				<?php if (isset($sMenu)){ ?>
					<div region="west" split="false" title="<?php echo $cmenu;?>" style="width:200px;padding:5px; overflow:hidden">
						<?php echo $sMenu; ?>
					</div>
				<?php } ?>
				<div region="south" border="false" style="height:65px;background:#DFDFDF;padding:10px;"></div>
				<div id="m_content" region="center">
					<?php echo $content;?>
				</div>
			</div>
		</div>
	</div>
</body>
</html>		