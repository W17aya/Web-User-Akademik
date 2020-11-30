<table class="tpmain">
	<thead>
		<tr>
			<th>NAMA KELAS</th>
			<th>NAMA GURU</th>
			<th>NAMA MATA PELAJARAN</th>
			<th>JAM</th>
			<th>HARI</th>
			<th>SEMESTER</th>
			
			
			<!--th>.::.</th-->
		</tr>
	</thead>
	<tbody id="f<?php echo $menu;?>dt">
		<?php if ($dat) {?>
			<?php foreach($dat as $r => $td) {?>
				<!--?php foreach($dat as $r => $td)?-->
					<tr>
						<td class="nama_kelas"><?php echo $td['nama_kelas'];?></td>
						<td class="nama_guru"><?php echo $td['nama_guru'];?></td>
						<td class="nama_pelajaran"><?php echo $td['nama_pelajaran'];?></td>
						<td class="jam"><?php echo $td['jam'];?></td>
						<td class="hari"><?php echo $td['hari'];?></td>
						<td class="semester"><?php echo $td['semester'];?></td>
						
						<!--td class="center"><a href="#f<?php echo $menu;?>" rel="update" class="easyui-linkbutton" plain="true" iconCls="icon-edit" title="Edit" onclick="tr2dform(this, event, 'Edit')"><a/></td-->
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
