<div class="menubar">
	<?php	if ($user) 
			{?>
				<a href="<?php echo $url."main/page/0/Home"?>" class="easyui-linkbutton <?php if ($cmenu == 'Home') echo 'hover';?>" plain="true" iconCls="icon-home" title="Home" onclick="">Home</a>
	<?php	} ?>
	<?php	if ($tmenu) { 
				foreach ($tmenu as $r => $m) { ?>
					<a href="<?php echo $url."main/page/".$m['menu_id']."/".str_replace(' ', '_', $m['title']);?>" class="easyui-linkbutton <?php if ($cmenu == $m['title']) echo 'hover';?>" plain="true" iconCls="<?php echo $m['icon'];?>" title="<?php echo $m['title'];?>"><?php echo $m['menu'];?></a>
	<?php		} 
			} ?>
	
	<?php	if ($user) { ?>
				<a href="<?php echo $url;?>authent/out" class="easyui-linkbutton mright" plain="true" iconCls="icon-logout" title="Logout">Logout</a>
	<?php	} ?>
</div>