<table class="tpmain">
	<thead>
		<tr>
			<th>ID MATKUL</th>
			<th>NAMA MATA KULIAH</th>
			<th>ID RUANGAN </th>
			<th>NAMA RUANGAN </th>
			<th>HARI </th>
			<th>JAM </th>
			
			<!--th>.::.</th-->
		</tr>
	</thead>
	<tbody id="f<?php echo $menu;?>dt">
		<?php if ($dat) {?>
			<?php foreach($dat as $r => $td) {?>
				<!--?php foreach($dat as $r => $td)?-->
					<tr>
						<td class="ID_MATKUL"><center><?php echo $td['ID_MATKUL'];?></center></td>
						<td class="NAMA_MATAKULIAH"><?php echo $td['NAMA_MATAKULIAH'];?></td>
						<td class="ID_RUANGAN"><center><?php echo $td['ID_RUANGAN'];?></center></td>
						<td class="NAMA_RUANGAN"><?php echo $td['NAMA_RUANGAN'];?></td>
						<td class="HARI"><center><?php echo $td['HARI'];?></center></td>
						<td class="JAM"><center><?php echo $td['JAM'];?></center></td>
						
						</tr>
				<!--?php }?-->
			<?php }?>
		<?php }?>
	</tbody>
	<tfoot>
		<tr>
			<!--td class="center" colspan="3"><a href="#f<?php echo $menu;?>" rel="create" class="easyui-linkbutton" plain="true" iconCls="icon-add" title="Add" onclick="tr2dform(this, event, 'Add New')">Add New<a/></td-->
		</tr>
	</tfoot>
</table>

<!--form id="<?php echo 'f'.$menu?>" class="hide">
	<label>Col 1</label><input type="text" class="postit menu_id"/>
	<label>Col 2</label><input type="text" class="postit usergroup_id"/>
</form-->