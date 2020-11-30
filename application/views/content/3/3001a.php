<table class="tpmain">
	<thead>
		<tr>
			<th class="hide">ID DOSEN</th>
			<th>NIP</th>
			<th>NAMA DOSEN</th>
			<th>TANGGAL LAHIR</th>
			<th>AGAMA</th>
			<th>JENIS KELAMIN</th>
			<th>NO TELP</th>
			<th>ALAMAT</th>
			
			
			<!--th>.::.</th-->
		</tr>
	</thead>
	<tbody id="f<?php echo $menu;?>dt">
		<?php if ($dat) {?>
			<?php foreach($dat as $r => $td) {?>
				<!--?php foreach($dat as $r => $td)?-->
					<tr>
						<td class="ID_DOSEN hide"><?php echo $td['ID_DOSEN'];?></td>
						<td class="NIP"><center><?php echo $td['NIP'];?><center></td>
						<td class="NAMA_DOSEN"><?php echo $td['NAMA_DOSEN'];?></td>
						<td class="TGL_LAHIR"><center><?php echo $td['TGL_LAHIR'];?><center></td>
						<td class="AGAMA"><center><?php echo $td['AGAMA'];?><center></td>
						<td class="JK"><center><?php echo $td['JK'];?><center></td>
						<td class="NO_TELEPON"><center><?php echo $td['NO_TELEPON'];?><center></td>
						<td class="ALAMAT"><?php echo $td['ALAMAT'];?></td>
						
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
