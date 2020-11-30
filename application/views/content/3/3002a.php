<table class="tpmain">
	<thead>
		<tr>
			<th>NIM MAHASISWA</th>
			<th>NAMA MAHASISWA</th>
			<th>TANGGAL LAHIR</th>
			<th>AGAMA MAHASISWA</th>
			<th>NO TELEPON</th>
			<th>ALAMAT MAHASISWA</th>
			<th>NAMA AYAH</th>
			<th>PEKERJAAN AYAH</th>
			<th>NAMA IBU</th>
			<th>PEKERJAAN IBU</th>
			<th>ALAMAT ORANG TUA</th>
			<th>JENIS KELAMIN</th>
			
			
			<!--th>.::.</th-->
		</tr>
	</thead>
	<tbody id="f<?php echo $menu;?>dt">
		<?php if ($dat) {?>
			<?php foreach($dat as $r => $td) {?>
				<!--?php foreach($dat as $r => $td)?-->
					<tr>
						<td class="NIM_MHS"><center><?php echo $td['NIM_MHS'];?></center></td>
						<td class="NAMA_MHS"><?php echo $td['NAMA_MHS'];?></td>
						<td class="TGL_LHR"><center><?php echo $td['TGL_LHR'];?></center></td>
						<td class="AGAMA_MHS"><center><?php echo $td['AGAMA_MHS'];?></center></td>
						<td class="NO_TLP"><?php echo $td['NO_TLP'];?></td>
						<td class="ALAMAT_MHS"><?php echo $td['ALAMAT_MHS'];?></td>
						<td class="NAMA_AYAH"><?php echo $td['NAMA_AYAH'];?></td>
						<td class="PEKERJAAN_AYAH"><?php echo $td['PEKERJAAN_AYAH'];?></td>
						<td class="NAMA_IBU"><?php echo $td['NAMA_IBU'];?></td>
						<td class="PEKERJAAN_IBU"><?php echo $td['PEKERJAAN_IBU'];?></td>
						<td class="ALAMAT_ORTU"><?php echo $td['ALAMAT_ORTU'];?></td>
						<td class="JENIS_KELAMIN"><center><?php echo $td['JENIS_KELAMIN'];?></center></td>
						
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
